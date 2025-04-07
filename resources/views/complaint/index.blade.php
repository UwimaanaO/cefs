<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="preconnect" href="https://fonts.bunny.net">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<x-app-layout>
    <div class="d-flex justify-content-center align-items-center vh-90">
        <div class="card p-4 shadow-lg" style="width: 800px; margin-left: 25%; margin-top: 5%; font-size: 30px; border: 1px solid green;">
            <h1>Select Nature of Complaint</h1>
            <div class="complaint-options mt-4">
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" id="missingMark" name="complaintType" class="custom-control-input" onclick="openForm('Missing Mark')">
                    <label class="custom-control-label" for="missingMark">Missing Mark</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" id="remark" name="complaintType" class="custom-control-input" onclick="openForm('Remark')">
                    <label class="custom-control-label" for="remark">Remark</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="wrongYear" name="complaintType" class="custom-control-input" onclick="openForm('Wrong Academic Year')">
                    <label class="custom-control-label" for="wrongYear">Wrong Academic Year</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup Form -->
    <div id="formOverlay" style="display:none; position: fixed; top: 0; left: 0; width:100%; height:100%; background-color: rgba(0,0,0,0.6); z-index: 9999; justify-content:center; align-items:center;">
        <div class="card p-4" style="width: 600px; background-color: #fff; border-radius: 10px;">
            <h3 class="mb-4 text-center" id="formTitle">Please fill in this form!</h3>
            <form id="complaintForm">
                <input type="hidden" name="complaintType" id="complaintTypeField">

                <div class="form-group">
                    <label>Student No.</label>
                    <input type="text" class="form-control" name="studentNo" value="{{ Auth::user()->student_number}}" readonly>
                </div>
                <div class="form-group">
                    <label>Course Code</label>
                    <input type="text" class="form-control" name="courseCode" required>
                </div>
                <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" class="form-control" name="courseName" required>
                </div>
                <div class="form-group">
                    <label>Academic Year of Sitting</label>
                    <select class="form-control" name="academicYear" required>
                        <option value="">Select Year</option>
                        <option value="2022/2023">2022/2023</option>
                        <option value="2023/2024">2023/2024</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <select class="form-control" name="semester" required>
                        <option value="">Select Semester</option>
                        <option value="Semester I">Semester I</option>
                        <option value="Semester II">Semester II</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Course Lecturer</label>
                    <input type="text" class="form-control" name="courseLecturer" required>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" onclick="closeForm()">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        function openForm(type) {
            document.getElementById('formOverlay').style.display = 'flex';
            document.getElementById('complaintTypeField').value = type;
            document.getElementById('formTitle').textContent = `Complaint Form - ${type}`;
        }

        function closeForm() {
            document.getElementById('formOverlay').style.display = 'none';
        }

        document.getElementById('complaintForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const type = document.getElementById('complaintTypeField').value;
            alert(type + " complaint submitted!");
            closeForm();
        });
    </script>
</x-app-layout>
