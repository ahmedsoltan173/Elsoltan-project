const sections = document.getElementsByTagName('section');
const ul = document.getElementById('navbar__list');
const ul_li_array = document.getElementById('navbar__list').childNodes;
const limenu = document.querySelector('.li-menu');
const header = document.querySelector('.page__header');

const SectionOffSetValue = [];
let active_Sections;
let active_Section_Id;
// build the nav
const Building_Navbar = () => {
    for (let section of sections) {
        let li = section.attributes['data-nav'].nodeValue;
        ul.innerHTML += `<li><a href="" class="menu__link"> ${li}</a></li>`;
        SectionOffSetValue.push(section.offsetTop);

    }
    ul.childNodes[0].classList.add('activeNav');
}

Building_Navbar();
// Add class 'active' to section when near top of viewport


// Scroll to anchor ID using scrollTO event


/**
 * End Main Functions
 * Begin Events
 * 
 */
window.addEventListener('scroll', (e) => {

    // check if we reached the first section 
    if (SectionOffSetValue && window.pageYOffset >= SectionOffSetValue[0]) {

        SectionOffSetValue.map((value, index) => {
            if (value <= window.pageYOffset + 150) {
                active_Sections = sections[index];
                active_Section_Id = index;
            }
        })
        if (active_Sections.classList.contains('your-active-class')) {
            return;
        } else {
            for (let section of sections) {
                section.classList.remove("your-active-class")
            }
            for (let li of ul_li_array) {
                li.classList.remove("activeNav")
            }
            active_Sections.classList.add("your-active-class")
            ul_li_array[active_Section_Id].classList.add("activeNav");
        }
    }
})
limenu.addEventListener('click', (event) => {
    header.classList.toggle("slide-out");
})

ul.addEventListener('click', (event) => {
    event.preventDefault();
    console.dir(event.target.nodeName)
    if (event.target.nodeName == 'A') {
        for (let section of sections) {
            if (event.target.outerText == section.attributes['data-nav'].nodeValue) {
                window.scrollTo({
                    top: section.offsetTop,
                    left: section.offsetLeft,
                    behavior: 'smooth'

                });
            }
        }
    }
});
/*Option box Color by jquery*/


// let but = document.querySelector('.gear-check');
// let gearbox = document.querySelector('.color-option');
// but.addEventListener('click', () => {
//     gearbox.style.display = "inline-block";
// });

$(".gear-check").click(function() {
    $(".color-option").fadeToggle();
});
var colorLi = $(".color-option ul li");
colorLi
    .eq(0).css("backgroundColor", "#ab0707").end()
    .eq(1).css("backgroundColor", "rgb(92 184 92)").end()
    .eq(2).css("backgroundColor", "#009AFF").end()
    .eq(3).css("backgroundColor", "rgb(241, 36, 180)");

colorLi.click(function() {
    //  console.log($(this).attr("data-value"))
    $("link[href*='theme']").attr("href", $(this).attr("data-value"));
});