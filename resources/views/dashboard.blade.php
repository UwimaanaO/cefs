<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<x-app-layout>
    <div class="container mt-5 text-center">
        <p class="fs-4 fw-semibold text-muted">A quick summary of your complaints:</p>
    
        <div class="row justify-content-center">
            <!-- Complaints Submitted -->
            <div class="col-md-3">
                <div class="card text-white shadow-sm border-0 text-center p-4 mx-auto mb-3" 
                     style="background-color: #007bff; border-radius: 12px; width: 250px;">
                    <i class="fas fa-comments fa-2x"></i>
                    <h5 class="mt-3 fw-bold">{{ $complaintsSubmitted ?? 0 }}</h5>
                    <p class="mb-0 small">Complaints Submitted</p>
                </div>
            </div>
    
            <!-- Complaints Resolved -->
            <div class="col-md-3">
                <div class="card text-white shadow-sm border-0 text-center p-4 mx-auto mb-3" 
                     style="background-color: #28a745; border-radius: 12px; width: 250px;">
                    <i class="fas fa-check-circle fa-2x"></i>
                    <h5 class="mt-3 fw-bold">{{ $complaintsResolved ?? 0 }}</h5>
                    <p class="mb-0 small">Complaints Resolved</p>
                </div>
            </div>
    
            <!-- Pending Complaints -->
            <div class="col-md-3">
                <div class="card text-white shadow-sm border-0 text-center p-4 mx-auto mb-3" 
                     style="background-color: #ffc107; border-radius: 12px; width: 250px;">
                    <i class="fas fa-exclamation-triangle fa-2x"></i>
                    <h5 class="mt-3 fw-bold">{{ $pendingComplaints ?? 0 }}</h5>
                    <p class="mb-0 small">Pending Complaints</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> <!-- ✅ Missing closing tag added here -->
