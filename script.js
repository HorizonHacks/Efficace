var video = document.getElementById("myVideo");

function myFunction() {
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
}

function add_idea() {
  // Create div element for holding the ideas
  var ideaHolder = document.createElement("div");
  ideaHolder.setAttribute("id", "idea_holder");
  ideaHolder.setAttribute("style", "height:fit_content");
  ideaHolder.setAttribute("style", "margin: 5px");
  ideaHolder.setAttribute("class", "boxes");

  // Create subject heading
  var subjectHeading = document.createElement("h3");
  subjectHeading.setAttribute("style", "margin-bottom:0px;font-size:20px");
  subjectHeading.setAttribute("id", "subject");
  subjectHeading.textContent = "Subject";

  // Create input for subject
  var subjectInput = document.createElement("input");
  subjectInput.setAttribute("id", "subject_text");
  subjectInput.setAttribute("class", "boxes");
  subjectInput.setAttribute("style", "display:block;height:20px;width:calc(100% - 14px);margin-right:auto;margin-left:auto;");
  subjectInput.setAttribute("type", "text");
  subjectInput.setAttribute("placeholder", "Ukraine, Gun Control, Border Patrol, Crime, etc.");

  // Create description heading
  var descriptionHeading = document.createElement("h3");
  descriptionHeading.setAttribute("style", "font-size:20px;margin-bottom:0;");
  descriptionHeading.setAttribute("id", "description");
  descriptionHeading.textContent = "Description";

  // Create textarea for description
  var descriptionTextarea = document.createElement("textarea");
  descriptionTextarea.setAttribute("id", "description_text");
  descriptionTextarea.setAttribute("style", "display:block;height:50px;width:calc(100% - 14px);margin-right:auto;margin-left:auto;");
  descriptionTextarea.setAttribute("class", "boxes");
  descriptionTextarea.setAttribute("placeholder", "Your stance...");

  // Append elements to ideaHolder
  ideaHolder.appendChild(subjectHeading);
  ideaHolder.appendChild(subjectInput);
  ideaHolder.appendChild(descriptionHeading);
  ideaHolder.appendChild(descriptionTextarea);

  // Find the "ideology" div
  var ideologyDiv = document.getElementById("ideology");

  // Append ideaHolder to ideologyDiv
  ideologyDiv.appendChild(ideaHolder);

}