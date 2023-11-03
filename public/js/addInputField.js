document.addEventListener("DOMContentLoaded", function () {
  // Get references to the container and the "Add Skill" button
  const skillInputsContainer = document.getElementById("skillInput");
  const addSkillButton = document.getElementById("addSkill");
  const hobbyInputsContainer = document.getElementById("hobbyInput");
  const addHobbyButton = document.getElementById("addHobby");

  addSkillButton.addEventListener("click", function () {
    // Create a new skill row containing an input and a delete button
    const skillRow = document.createElement("div");
    skillRow.className = "skill-input-row";

    // Create an input element
    const inputElement = document.createElement("input");
    inputElement.type = "text";
    inputElement.name = "skills[]";

    // Create a delete button
    const deleteButton = document.createElement("button");
    deleteButton.type = "button";
    deleteButton.className = "delete-skill";
    deleteButton.textContent = "Delete";
    deleteButton.onclick = function () {
      deleteSkill(this);
    };

    // Append the input and delete button to the skill row
    skillRow.appendChild(inputElement);
    skillRow.appendChild(deleteButton);

    // Append the skill row to the skillInputsContainer
    skillInputsContainer.appendChild(skillRow);
  });

  addHobbyButton.addEventListener("click", function () {
    // Create a new skill row containing an input and a delete button
    const skillRow = document.createElement("div");
    skillRow.className = "skill-input-row";

    // Create an input element
    const inputElement = document.createElement("input");
    inputElement.type = "text";
    inputElement.name = "hobby[]";

    // Create a delete button
    const deleteButton = document.createElement("button");
    deleteButton.type = "button";
    deleteButton.className = "delete-skill";
    deleteButton.textContent = "Delete";
    deleteButton.onclick = function () {
      deleteSkill(this);
    };

    // Append the input and delete button to the skill row
    skillRow.appendChild(inputElement);
    skillRow.appendChild(deleteButton);

    // Append the skill row to the skillInputsContainer
    hobbyInputsContainer.appendChild(skillRow);
  });

  function deleteSkill(button) {
    // Get the parent element of the button (which is the container for the input and the button)
    const parentElement = button.parentElement;

    // Remove the parent element, which includes the input and the delete button
    parentElement.remove();
  }
});
