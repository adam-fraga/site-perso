//-------------------------------------------- Script PROJETS-------------------------------------------------------

let btnNext = document.querySelector('#next-project')
let btnPrev = document.querySelector('#prev-project')
let container = document.querySelector('#workshop')


// Switch to next project
function nextProject(e) {
    e.preventDefault();
    // Set first child
    let firstProject = container.firstElementChild
    // Remove all TW class form main project
    firstProject.classList.remove('project', 'w-96', 'h-72', 'mb-12', 'mx-5', 'flex', 'justify-center')
    // Add TW class for minor element
    firstProject.classList.add('project', 'inline-block', 'h-2/4', 'md:w-60', 'mx-5')
    //Place the first node at the end of his parent
    container.appendChild(firstProject);
    // Remove to the new first element minor TW class
    container.firstElementChild.classList.remove('project', 'inline-block', 'h-2/4', 'md:w-60', 'mx-5');
    //Add class main project to the new first child
    container.firstElementChild.classList.add('project', 'w-96', 'h-72', 'mb-12', 'mx-5', 'flex', 'justify-center');
}

// Switch to previous project
function prevProject(e) {
    e.preventDefault();
    // Set first child
    let firstProject = container.firstElementChild;
    let lastProject = container.lastElementChild;
    // Switch class from main project to last project
    firstProject.classList.remove('project', 'w-96', 'h-72', 'mb-12', 'mx-5', 'flex', 'justify-center')
    lastProject.classList.remove('project', 'inline-block', 'h-2/4', 'md:w-60', 'mx-5');
    firstProject.classList.add('project', 'inline-block', 'h-2/4',  'md:w-60', 'mx-5')
    lastProject.classList.add('project', 'w-96', 'h-72', 'mb-12', 'mx-5', 'flex', 'justify-center')
    container.prepend(lastProject);
}

// Listenner
btnPrev.addEventListener('click', prevProject);
btnNext.addEventListener('click', nextProject);

// Fix footer respnsive later
