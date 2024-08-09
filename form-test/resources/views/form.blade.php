<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Activity Management Form</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      .container {
        width: 80%;
        margin: 0 auto;
      }
      .form-header {
        background-color: #f58220;
        color: white;
        padding: 20px;
        text-align: center;
      }
      .form-header img {
        width: 50px;
        vertical-align: middle;
      }
      .form-header h1 {
        display: inline;
        margin-left: 20px;
        font-size: 24px;
      }
      .form-group {
        margin: 20px 0;
      }
      .form-group-box {
        display: flex;
        justify-content: space-between;
      }
      .form-group-box .box {
        flex: 1;
        margin-right: 10px;
      }
      .form-group-box .box:last-child {
        margin-right: 0;
      }
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      input,
      select,
      textarea {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
      }
      .form-actions {
        text-align: right;
      }
      .form-actions button {
        background-color: #f58220;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
      }
      .form-actions button:hover {
        background-color: #e0701c;
      }
      .columns {
        display: flex;
        justify-content: space-between;
      }
      .column {
        flex: 1;
        margin-right: 10px;
      }
      .column:last-child {
        margin-right: 0;
      }
      .file-input-container {
        position: relative;
        overflow: hidden;
        display: inline-block;
        text-align: center;
      }
      .file-input {
        font-size: 14px;
        color: white;
        background-color: #f58220;
        border: none;
        padding: 10px 500px;
        cursor: pointer;
      }
      .file-input-container input[type="file"] {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        cursor: pointer;
        text-align: left;
      }

      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
      }
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
      }
      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }
      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
      .submit-btn {
        background-color: #f58220;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
      }
      .submit-btn:hover {
        background-color: #e0701c;
      }
      #preview-container img {
        max-width: 100px;
        margin: 5px;
      }

    </style>
  </head>

  <body>
    <div class="container">

      <!--Header-->
      <div class="form-header">
        <img src="logo.png" alt="Food Innovation Center" />
        <h1>ACTIVITY MANAGEMENT FORM</h1>
      </div>

      <!--Form Start-->
      <form action="{{ route('generate-pdf') }}" method="POST">
        @csrf
        <div class="form-group form-group-box">
          <div class="box">
            <label for="activity_name">Activity Name:</label>
            <select id="activity_name" name="activity_name">
              <option>Select</option>
              <option>a. Industry Engagement</option>
              <option>
                b. Developing and maintaining active partnerships in the food
                industry
              </option>
              <option>c. Technical Consultancy</option>
              <option>d. Conduct Trainings</option>
              <option>
                e. Attendance to relevant seminar-workshops, training courses
              </option>
              <option>f. Conduct of regular consultative meetings</option>
              <option>g. Benchmarking Activity</option>
              <option>
                h. Capacity building in assigned duties and responsibilities
              </option>
              <option>i. Institutional Collaboration</option>
              <!-- Add options here -->
            </select>
          </div>

          <div class="box">
            <label for="activity_manager">Activity Manager:</label>
            <select id="activity_manager" name="activity_manager">
              <option>Select</option>
              <option>Researchers Name</option>
              <option>Researchers Name</option>
              <!-- Add options here -->
            </select>
            <label for="manager_others">Others:</label>
            <input type="text" id="manager_others" name="manager_others" />
          </div>

          <div class="box">
            <label for="activity_leader">Activity Leader:</label>
            <select id="activity_leader" name="activity_leader">
              <option>Select</option>
              <option>Researchers Name</option>
              <option>Researchers Name</option>
              <!-- Add options here -->
            </select>
            <label for="leader_others">Others:</label>
            <input type="text" id="leader_others" name="leader_others" />
          </div>

          <div class="box">
            <label for="activity_partner">Activity Partner/Client:</label>
            <select id="activity_partner" name="activity_partner">
              <option>Select</option>
              <option>1) Researcher-initiated</option>
              <option>2) SMME/External</option>
              <!-- Add options here -->
            </select>
            <label for="partner_others">Others:</label>
            <input type="text" id="partner_others" name="partner_others" />
          </div>
        </div>

        <div class="form-group">
          <label for="project_summary">Project Summary:</label>
          <textarea
            id="project_summary"
            name="project_summary"
            maxlength="300"
          ></textarea>
        </div>
        <div class="form-group">
          <label for="project_objectives">Project Objectives:</label>
          <input
            type="text"
            id="project_objective_1"
            name="project_objective_1"
            placeholder="1."
          />
          <input
            type="text"
            id="project_objective_2"
            name="project_objective_2"
            placeholder="2."
          />
          <input
            type="text"
            id="project_objective_3"
            name="project_objective_3"
            placeholder="3."
          />
          <input
            type="text"
            id="project_objective_4"
            name="project_objective_4"
            placeholder="4."
          />
          <input
            type="text"
            id="project_objective_5"
            name="project_objective_5"
            placeholder="5."
          />
          <input
            type="text"
            id="project_objective_6"
            name="project_objective_6"
            placeholder="6."
          />
        </div>

        <div class="form-group">
          <label for="scope_of_work">Scope of Work:</label>
          <select id="scope_of_work" name="scope_of_work">
            <option>Select</option>
            <option>Local</option>
            <option>Regional</option>
            <option>National</option>
            <option>International</option>
            <!-- Add options here -->
          </select>
        </div>

        <div class="form-group">
          <label for="key_deliverables">Key Deliverables:</label>
          <input
            type="text"
            id="key_deliverables_1"
            name="key_deliverables_1"
            placeholder="1."
          />
          <input
            type="text"
            id="key_deliverables_2"
            name="key_deliverables_2"
            placeholder="2."
          />
          <input
            type="text"
            id="key_deliverables_3"
            name="key_deliverables_3"
            placeholder="3."
          />
          <input
            type="text"
            id="key_deliverables_4"
            name="key_deliverables_4"
            placeholder="4."
          />
          <input
            type="text"
            id="key_deliverables_5"
            name="key_deliverables_5"
            placeholder="5."
          />
          <input
            type="text"
            id="key_deliverables_6"
            name="key_deliverables_6"
            placeholder="6."
          />
        </div>

        <div class="form-group">
        <label for="project_timeline">Project Timeline:</label>
          <div class="columns">
            <div class="column">
              <label for="open_date">Open:</label>
              <input type="date" id="open_date" name="open_date" />
            </div>
            <div class="column">
              <label for="phase">Phase:</label>
              <select id="phase" name="phase">
                <option>Select</option>
                <option>Phase 1</option>
                <option>Phase 2</option>
                <option>Phase 3</option>
                <!-- Add options here -->
              </select>
          </div>
        </div>

        <div class="form-group">
          <div class="file-input-container">
            <label for="file_input">And/Or</label>
            <button class="file_input">Upload Gantt Charts</button>
            <input type="file" id="upload_gantt" name="upload_gantt" accept=".png, .jpg, .jpeg, .gif, .pdf" multiple />
          </div>

          <!-- Preview Gantt Charts -->
          <div id="gantt-preview" style="display: none;">
            <h4>Gantt Chart Previews:</h4>
            <div id="gantt-preview-container"></div>
          </div>
        </div>

        <div class="form-group form-group-box">
          <div class="box">
            <label for="activity_team">Activity Team:</label>
            <select id="activity_team" name="activity_team">
              <option>Select</option>
              <option>Researchers & others</option>
              <!-- Add options here -->
            </select>
          </div>

          <div class="box">
            <label for="role">Role:</label>
            <select id="role" name="role">
              <option>Select</option>
              <option>Lead</option>
              <option>Member</option>
              <!-- Add options here -->
            </select>
          </div>

          <div class="box">
            <label for="responsibility">Responsibility:</label>
            <input type="text" id="responsibility" name="responsibility" />
          </div>

          <div class="box">
            <label for="team_others">Others:</label>
            <input type="text" id="team_others" name="team_others" />
          </div>
        </div>

        <div class="form-group">
          <label for="comments">Comments:</label>
          <textarea id="comments" name="comments"></textarea>
        </div>

      
      <!-- Generate Button -->
      <div class="form-actions">
        <button type="submit">Generate Page</button>
      </div>
      </form>

      <form action="{{ route('generate-pdf2') }}" method="POST">
        @csrf
        <div class="form-group form-group-box">
          <div class="box">
            <label for="accomplishment_type">Strategic Performance Management System:</label>
              <select id="accomplishment_type" name="accomplishment_type">
                <option>IPCR</option>
                <option>OPCR</option>
              </select>
            </div>
        </div>

        <div class="form-group form-group-box">
          <div class="box">
          <label for="period">Period:</label>
            <select id="period" name="period">
              <option>1st Quarter</option>
              <option>2nd Quarter</option>
              <option>3rd Quarter</option>
              <option>4th Quarter</option>
              <option>Bi-Annual</option>
              <option>Annual</option>
            </select>
          </div>

          <div class="box">
            <label for="acc_others">Others:</label>
            <input type="text" id="acc_others" name="acc_others" />
          </div>
        </div>

        <!-- Generate Button -->
        <div class="form-actions">
          <button type="submit">Generate Accomplishment Page</button>
        </div>
      </form>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("openModalBtn");
        var span = document.querySelector(".close");
        var form = document.getElementById("modalForm");
        var previewContainer = document.getElementById("preview-container");
        var displaySection = document.getElementById("display-section");
        var displayTitle = document.getElementById("display-title");
        var displayDescription = document.getElementById("display-description");
        var displayDate = document.getElementById("display-date");
        var displayPhotosDiv = document.getElementById("display-photos");

        btn.addEventListener("click", function () {
          modal.style.display = "block";
        });

        span.addEventListener("click", function () {
          modal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        });

        var uploadPhotosInput = document.getElementById("upload-photos");
        uploadPhotosInput.addEventListener("change", function (event) {
          const files = event.target.files;
          previewContainer.innerHTML = "";

          if (files.length > 0) {
            document.getElementById("photo-preview").style.display = "block";
            Array.from(files).forEach((file) => {
              const reader = new FileReader();
              reader.onload = function (e) {
                const img = document.createElement("img");
                img.src = e.target.result;
                previewContainer.appendChild(img);
              };
              reader.readAsDataURL(file);
            });
          } else {
            document.getElementById("photo-preview").style.display = "none";
          }
        });

        form.addEventListener("submit", function (event) {
          event.preventDefault();

          var title = document.getElementById("title").value;
          var description = document.getElementById("description").value;
          var date = document.getElementById("date").value;
          var photos = document.getElementById("upload-photos").files;

          displayTitle.textContent = "Title: " + title;
          displayDescription.textContent = "Description: " + description;
          displayDate.textContent = "Date: " + date;

          displayPhotosDiv.innerHTML = "";
          if (photos.length > 0) {
            Array.from(photos).forEach((file) => {
              const reader = new FileReader();
              reader.onload = function (e) {
                const img = document.createElement("img");
                img.src = e.target.result;
                img.style.maxWidth = "100px";
                img.style.margin = "5px";
                displayPhotosDiv.appendChild(img);
              };
              reader.readAsDataURL(file);
            });
          }

          modal.style.display = "none";
        });
      });

document.addEventListener('DOMContentLoaded', function() {
    var uploadGanttInput = document.getElementById('upload_gantt');
    var ganttPreviewContainer = document.getElementById('gantt-preview-container');
    var ganttPreview = document.getElementById('gantt-preview');

    if (uploadGanttInput) {
        uploadGanttInput.addEventListener('change', function(event) {
            const files = event.target.files;
            ganttPreviewContainer.innerHTML = '';

            if (files.length > 0) {
                ganttPreview.style.display = 'block';

                Array.from(files).forEach(file => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const previewElement = document.createElement('div');
                        previewElement.style.display = 'inline-block';
                        previewElement.style.margin = '5px';

                        // Check if the file is an image or PDF and render appropriately
                        if (file.type.startsWith('image/')) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.style.maxWidth = '150px';
                            img.style.height = 'auto';
                            previewElement.appendChild(img);
                        } else if (file.type === 'application/pdf') {
                            const iframe = document.createElement('iframe');
                            iframe.src = e.target.result;
                            iframe.style.width = '150px';
                            iframe.style.height = '200px';
                            previewElement.appendChild(iframe);
                        }

                        ganttPreviewContainer.appendChild(previewElement);
                    };
                    reader.readAsDataURL(file);
                });
            } else {
                ganttPreview.style.display = 'none';
            }
        });
    }
});
  </script>        
  </body>
</html>

