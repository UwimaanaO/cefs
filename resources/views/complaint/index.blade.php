<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<x-app-layout>
    <div class="d-flex justify-content-center align-items-center vh-90">
        <div class="card p-4 shadow-lg" style="width: 800px; margin-left: 25%; margin-top: 5%; font-size: 30px; border: 1px solid green;">
                    <h1>Select Nature of complaint</h1>
                    <div class="complaint-options mt-4">
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" id="missingMark" name="complaintType" class="custom-control-input"
                                checked>
                            <label class="custom-control-label" for="missingMark">Missing Mark</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" id="remark" name="complaintType" class="custom-control-input">
                            <label class="custom-control-label" for="remark">Remark</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="wrongYear" name="complaintType" class="custom-control-input">
                            <label class="custom-control-label" for="wrongYear">Wrong Academic year</label>
                        </div>
                    </div>
        </div>
    </div>
</x-app-layout>