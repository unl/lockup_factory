// Set up vars
const step_one = document.getElementById('step_one');
const step_two = document.getElementById('step_two');
const step_three = document.getElementById('step_three');

const back_to_step_one_button = document.getElementById('back_to_step_one');
const back_to_step_two_button = document.getElementById('back_to_step_two');

const category_list = document.getElementById('category_list');

const all_lockup_templates = document.querySelectorAll('.lockup-templates');

const all_lockup_previews = document.querySelectorAll('.lockup-previews');
const all_field_input = document.querySelectorAll('.input_field_class');

const templateFormInput = document.getElementById("lockupTemplateId");
const lockupNameElement = document.getElementById("lockupName");
const institutionElement = document.getElementById("institution");
const generatedLockupName = document.getElementById("generateLockupName");
const approverDropdown = document.getElementById("approver");
const commNotListed = document.getElementById("commNotListed");

if (edit_mode === true) {
    to_step_three();

    if (lockupCategory !== null && lockupCategory !== "") {
        category_list.value = lockupCategory;
        updateCategoryListing();
    }

    if (lockupTemplateID !== null && lockupTemplateID !== "") {
        selectLockupTemplate(lockupTemplateID);
    }

    if (lockupInstitution !== null && lockupInstitution !== "") {
        let tempElement = document.getElementById("institution");
        tempElement.value = lockupInstitution;
        updateGeneratedLockupName();
    }

    if (lockupName !== null && lockupName !== "") {
        let tempElement = document.getElementById("lockupName");
        tempElement.value = lockupName;
        updateGeneratedLockupName();
    }

    if (lockupApprover !== null && lockupApprover !== 0) {
        let tempElement = document.getElementById("approver");
        tempElement.value = lockupApprover;
        updateCommunicatorNotice();
    }
    if (lockupApprover !== null && lockupApprover == 0) {
        let tempElement = document.getElementById("approver");
        tempElement.value = '-1';
        updateCommunicatorNotice();
    }

    if (lockupFields !== null && Array.isArray(lockupFields)){
        lockupFields.forEach((field_data) => {
            const field_slug = field_data.fields.slug;
            const field_value = field_data.value;

            document.querySelector(`#${field_slug} input`).value = field_value;
            updateSVG();
        });
    }
}

// Handles event when category list is changed
category_list.addEventListener('input', () => {
    updateCategoryListing();
    to_step_two();
});

// Sets up templates
all_lockup_templates.forEach((template) => {
    const template_id = template.dataset.id;

    // Handles template click events
    template.addEventListener('click', () => {
        selectLockupTemplate(template_id);
        to_step_three();
    });
});

// Sets up field inputs
all_field_input.forEach((field_input) => {
    field_input.addEventListener('input', () => {
        updateSVG();
    });
});

// Handles approver dropdown change
approverDropdown.addEventListener("change", () => {
    updateCommunicatorNotice();
});

institutionElement.addEventListener("input", () => {
    updateGeneratedLockupName();
});
lockupNameElement.addEventListener("input", () => {
    updateGeneratedLockupName();
});

// Handles back to step one button click
back_to_step_one_button.addEventListener('click', () => {
    to_step_one();
});

// Handles back to step two button click
back_to_step_two_button.addEventListener('click', () => {
    to_step_two();
});

function updateSVG()
{
    inputArray.forEach((field_data) => {
        const field_slug = field_data.slug;
        const field_input_element = document.querySelector(`#${field_slug} input`);
        const field_default = field_input_element.getAttribute('placeholder') ?? "";
        let field_input_value = field_input_element.value || field_default;

        if (field_data.uppercase === 1) {
            field_input_value = field_input_value.toUpperCase();
        }
        field_input_value = escapeHtml(field_input_value);

        const svg_fields = document.querySelectorAll(`svg .${field_slug}`);
        svg_fields.forEach((svg_field_elem) => {
            svg_field_elem.innerHTML = field_input_value;
        });
    });
}

function selectLockupTemplate(template_id)
{
    all_lockup_templates.forEach((other_template) => {
        other_template.classList.remove('lockups-selected-template');
    });
    document.getElementById(`lockup-template-${template_id}`).classList.add("lockups-selected-template");

    templateFormInput.value = template_id;

    all_lockup_previews.forEach((other_previews) => {
        other_previews.classList.add('dcf-d-none');
    });
    document.getElementById(`lockup-preview-${template_id}`).classList.remove('dcf-d-none');

    // inputArray is not defined in this file
    inputArray.forEach((field_input) => {
        if (field_input.templates.includes(parseInt(template_id))) {
            document.getElementById(field_input.slug).classList.remove('dcf-d-none');
        } else {
            document.getElementById(field_input.slug).classList.add('dcf-d-none');
        }
    });
}

function updateCategoryListing()
{
    const category_selected = category_list.value;

    all_lockup_templates.forEach((template) => {
        template.classList.remove('lockups-selected-template');
        if (template.classList.contains(category_selected)) {
            template.classList.remove('dcf-d-none');
        } else {
            template.classList.add('dcf-d-none');
        }
    });
}

function updateGeneratedLockupName()
{
    let getInstitutionName = institutionElement.value;
    let getLockupName = lockupNameElement.value;

    if (getInstitutionName === "") {
        getInstitutionName = "COB";
    }
    if (getLockupName === "") {
        getLockupName = "Sample Lockup";
    }
    let sanitizedInstitutionName = getInstitutionName.toString().replace(/[^a-zA-Z0-9 ]/g, '');
    let sanitizedLockupName = getLockupName.toString().replace(/[^a-zA-Z0-9 ]/g, '');

    sanitizedInstitutionName = sanitizedInstitutionName.replaceAll(" ", "_");
    sanitizedInstitutionName = sanitizedInstitutionName.toUpperCase(); //uppercase

    sanitizedLockupName = sanitizedLockupName.replaceAll(" ", "_");

    generatedLockupName.textContent = sanitizedInstitutionName + "_" + sanitizedLockupName + ".zip";
}

function updateCommunicatorNotice()
{
    if (approverDropdown.value == "-1") {
        commNotListed.classList.remove('dcf-d-none');
    } else {
        commNotListed.classList.add('dcf-d-none');
    }
}

function to_step_one()
{
    step_two.classList.add('dcf-d-none');
    step_three.classList.add('dcf-d-none');

    step_one.classList.remove('lockups-step-disabled');
    step_two.classList.remove('lockups-step-disabled');
    step_three.classList.remove('lockups-step-disabled');

    category_list.removeAttribute('tabindex');
    category_list.value = "";
    back_to_step_one_button.removeAttribute('tabindex');
    all_lockup_templates.forEach((template) => {
        template.setAttribute('tabindex', '0');
        template.classList.remove('lockups-selected-template');
    });

    step_one.scrollIntoView({behavior: 'smooth', block: 'start'});
}

function to_step_two()
{
    step_two.classList.remove('dcf-d-none');
    step_three.classList.add('dcf-d-none');

    step_one.classList.add('lockups-step-disabled');
    step_two.classList.remove('lockups-step-disabled');
    step_three.classList.remove('lockups-step-disabled');

    category_list.setAttribute('tabindex', '-1');
    back_to_step_one_button.removeAttribute('tabindex');
    all_lockup_templates.forEach((template) => {
        template.setAttribute('tabindex', '0');
        template.classList.remove('lockups-selected-template');
    });

    step_two.scrollIntoView({behavior: 'smooth', block: 'start'});
}

function to_step_three()
{
    step_two.classList.remove('dcf-d-none');
    step_three.classList.remove('dcf-d-none');

    step_one.classList.add('lockups-step-disabled');
    step_two.classList.add('lockups-step-disabled');
    step_three.classList.remove('lockups-step-disabled');

    category_list.setAttribute('tabindex', '-1');
    back_to_step_one_button.setAttribute('tabindex', '-1');
    all_lockup_templates.forEach((template) => {
        template.setAttribute('tabindex', '-1');
    });

    step_three.scrollIntoView({behavior: 'smooth', block: 'start'});
}

function escapeHtml(unsafe)
{
    return unsafe
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/"/g, "&quot;")
    .replace(/'/g, "&#039;");
}