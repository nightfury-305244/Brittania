const dropArea = document.querySelector('.drop-section')
const listSection = document.querySelector('.list-section')
const listContainer = document.querySelector('.list-items')
const fileSelector = document.querySelector('.file-selector')
const fileSelectorInput = document.querySelector('.file-selector-input')
const form = document.getElementById('form_container');

let allFiles = [];

// upload files with browse button
fileSelector.onclick = () => fileSelectorInput.click()
fileSelectorInput.onchange = () => {
    [...fileSelectorInput.files].forEach((file) => {
        if(typeValidation(file.type)){
            uploadFile(file)
        }
    })
}

// when file is over the drag area
dropArea.ondragover = (e) => {
    e.preventDefault();
    [...e.dataTransfer.items].forEach((item) => {
        if(typeValidation(item.type)){
            dropArea.classList.add('drag-over-effect')
        }
    })
}
// when file leave the drag area
dropArea.ondragleave = () => {
    dropArea.classList.remove('drag-over-effect')
}
// when file drop on the drag area
dropArea.ondrop = (e) => {
    e.preventDefault();
    dropArea.classList.remove('drag-over-effect')
    if(e.dataTransfer.items){
        [...e.dataTransfer.items].forEach((item) => {
            if(item.kind === 'file'){
                const file = item.getAsFile();
                if(typeValidation(file.type)){
                    uploadFile(file)
                }
            }
        })
    }else{
        [...e.dataTransfer.files].forEach((file) => {
            if(typeValidation(file.type)){
                uploadFile(file)
            }
        })
    }
}

// check the file type
function typeValidation(type){
    var splitType = type.split('/')[0]
    if(type == 'application/pdf' || splitType == 'image' || splitType == 'video'){
        return true
    }
}

// upload file function
function uploadFile(file){
    listSection.style.display = 'block'
    var li = document.createElement('li')
    li.classList.add('in-prog')

    li.innerHTML = `
        <div class="col">
            <img src="../assets/icons/${iconSelector(file.type)}" alt="">
        </div>
        <div class="col">
            <div class="file-name">
                <div class="name">${file.name}</div>
            </div>
            <div class="file-size">${(file.size/(1024*1024)).toFixed(2)} MB</div>
        </div>
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" class="cross" height="20" width="20"><path d="m5.979 14.917-.854-.896 4-4.021-4-4.062.854-.896 4.042 4.062 4-4.062.854.896-4 4.062 4 4.021-.854.896-4-4.063Z"/></svg>
        </div>
    `
    listContainer.prepend(li);
    
    allFiles.push(file);

    li.querySelector('.cross').onclick = () => {
        li.remove()  // Corrected line
    }
}
// find icon for file
function iconSelector(type){
    var splitType = (type.split('/')[0] == 'application') ? type.split('/')[1] : type.split('/')[0];
    return splitType + '.png'
}

form.addEventListener("submit", (event)=>{
    event.preventDefault();

    const formData = new FormData(form);

    formData.delete('images[]');

    allFiles.forEach((file) => {
        formData.append('images[]', file);
    })

    var http = new XMLHttpRequest();

    http.open('POST', form.action, true);

    http.onload = function() {
        if (http.status >= 200 && http.status < 300) {
            // Request was successful
            console.log('Update successful', http.status );
            alert('Update successful');
        } else {
            // Request failed
            var response;
            try {
                response = JSON.parse(http.responseText);
            } catch (e) {
                response = { message: http.responseText };
            }
            console.log('Update failed: ' + response.message);
            alert('Update failed: ' + response.message);
        }
    };

    http.onerror = function() {
        // Network error
        alert('Update failed: Network error');
    };

    http.send(formData);
    format();
})

const format = () => {
    document.getElementById("title").value = "";
    document.getElementById("price").value = 0;
    document.getElementById("description").value = "";
    document.getElementById("address_l1").value = "";
    document.getElementById("address_l2").value = "";
    document.getElementById("city").value = "";
    document.getElementById("town").value = "";
    document.getElementById("postcode").value = "";
    document.getElementById("details").value = "";
    if (document.getElementById("bedroom")){
        document.getElementById("bedroom").value=0;
    }
    if (document.getElementById("bathroom")){
        document.getElementById("bathroom").value=0;
    }
    document.getElementById("type").value = "House";
    document.getElementById("b_r_c").value = "";
    document.getElementById("available").value = "A";
    document.getElementById("keywords").value = "";
    if (document.getElementById("square_feet_size")){
        document.getElementById("square_feet_size").value=0;
    }
    if (document.getElementById("bathroom_access")){
        document.getElementById("bathroom_access").checked = false;
    }
    if (document.getElementById("parking")){
        document.getElementById("parking").checked = false;
    }
    allFiles = []
    while (listContainer.firstChild) {
        listContainer.removeChild(listContainer.firstChild);
    }
}