document.querySelector('.dropdown-menu').addEventListener('click', function(event) {
  event.stopPropagation();
});

// mobile menu
const mediaQuery = window.matchMedia("(max-width: 991px)");
if (mediaQuery.matches) {
  let elmnt = document.querySelector(".navbar");
  let hdr = document.querySelector(".site-header");
  hdr.insertAdjacentElement("afterend", elmnt);
}

function darken_screen(yesno) {
  if (yesno == true) {
    document.querySelector(".screen-darken").classList.add("active");
  } else if (yesno == false) {
    document.querySelector(".screen-darken").classList.remove("active");
  }
}

function close_offcanvas() {
  darken_screen(false);
  document.querySelector(".mobile-offcanvas.show").classList.remove("show");
  document.body.classList.remove("offcanvas-active");
}

function show_offcanvas(offcanvas_id) {
  darken_screen(true);
  document.getElementById(offcanvas_id).classList.add("show");
  document.body.classList.add("offcanvas-active");
}

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll("[data-trigger]").forEach(function (everyelement) {
    let offcanvas_id = everyelement.getAttribute("data-trigger");

    everyelement.addEventListener("click", function (e) {
      e.preventDefault();
      show_offcanvas(offcanvas_id);
    });
  });

  document.querySelectorAll(".btn-close").forEach(function (everybutton) {
    everybutton.addEventListener("click", function (e) {
      e.preventDefault();
      close_offcanvas();
    });
  });

  document
    .querySelector(".screen-darken")
    .addEventListener("click", function (event) {
      close_offcanvas();
    });
});

const header = document.querySelector(".main_head");
const main_hldr = document.querySelector(".main_hldr");
const toggle_button = document.querySelector(".toggle_btn");
const tags = document.querySelector(".tags");
const left_part = document.querySelector(".left_part");
const dropdown_div = document.querySelector(".dropdown_div");

toggle_button.addEventListener("click", function () {
  main_hldr.classList.toggle("hide");
  header.classList.toggle("hide");
  dropdown_div.style.display = "none";
});

// tags.addEventListener("wheel", function (event) {
//   event.preventDefault();
//   this.scrollLeft += event.deltaY;
// });

left_part.addEventListener('click', function(){
  if(main_hldr.classList.contains('hide') || header.classList.contains('hide')){
    main_hldr.classList.remove('hide');
    header.classList.remove('hide');
  };
});

document.querySelector('.inhouse_form').style.display = 'block';
document.querySelector('.outsourced_form').style.display = 'none';

document.querySelector(".switching").addEventListener('click', function(event) {
if (event.target.checked) {
 console.log('Check');
 document.querySelector('.inhouse_form').style.display = 'none';
   document.querySelector('.outsourced_form').style.display = 'block';
   document.querySelector('.drow_title').innerHTML = "Outsourced Drawing";
}
else{
  document.querySelector('.outsourced_form').style.display = 'none';
  document.querySelector('.inhouse_form').style.display = 'block';
  document.querySelector('.drow_title').innerHTML = "Inhouse Drawing";
}
});


const submenu = document.querySelector('.sumenuList');
submenu.addEventListener('click', function(){
  this.parentNode.classList.toggle('submenuopen');
})


function closeproject(id,url){
  Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, close it!"
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = url
  }
});
}
