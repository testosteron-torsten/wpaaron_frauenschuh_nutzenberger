export function init() {
    const nav = document.querySelector("#mainnav");
    const list = nav.querySelector("ul");
    const button = nav.querySelector("button");

    button.addEventListener("click", e => {
        console.log(button.classList)
        if(button.classList.contains('closed')) {
            button.classList.add('open');
            button.classList.remove('closed');
        } else {
            button.classList.add('closed');
            button.classList.remove('open');
        }
    });

    nav.addEventListener("keyup", e => {
        if(e.code === 'Escape') {
            button.setAttribute('aria-expanded', false);
        }
    });
}