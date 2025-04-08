<x-app-layout>
    <div class="container mt-5" style="margin-top: 5%">
        <h2 class="text-center mb-4">Status of Complaint</h2>

        @if ($complaints->isEmpty())
            <div class="alert alert-warning text-center">
                You haven't submitted any complaints yet.
            </div>
        @else
            @foreach ($complaints as $complaint)
                @php
                    $status = $complaint->status;
                    $steps = ['submitted' => 0, 'in_progress' => 1, 'rectified' => 2];
                    $currentStep = $steps[$status] ?? 0;
                @endphp

                <div class="card p-4 mb-4 shadow">
                    <h5 class="mb-3">
                        Complaint: <strong>{{ ucfirst(str_replace('_', ' ', $complaint->type)) }}</strong>
                    </h5>

                    <div class="d-flex justify-content-between align-items-center px-3">
                        @foreach (['Submitted', 'Being worked on', 'Rectified'] as $index => $label)
                            <div class="text-center" style="width: 33%;">
                                <div class="rounded-circle mx-auto mb-1 
                                    {{ $index <= $currentStep ? 'bg-success text-white' : 'bg-light text-dark' }}" 
                                    style="width: 30px; height: 30px; line-height: 30px;">
                                    {{ $index + 1 }}
                                </div>
                                <small>{{ $label }}</small>
                                <br>
                                <small>{{ $index * 50 }}%</small>
                            </div>
                            @if ($index < 2)
                                <div class="flex-fill mx-1" style="height: 4px; background-color: {{ $index < $currentStep ? '#28a745' : '#e0e0e0' }};"></div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</x-app-layout>
