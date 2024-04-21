(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").css("top", "0px");
    } else {
      $(".sticky-top").css("top", "-100px");
    }
  });

  // Dropdown on mouse hover
  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";

  $(window).on("load resize", function () {
    if (this.matchMedia("(min-width: 992px)").matches) {
      $dropdown.hover(
        function () {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function () {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        },
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Date and time picker
  $(".date").datetimepicker({
    format: "L",
  });
  $(".time").datetimepicker({
    format: "LT",
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: true,
    margin: 25,
    dots: true,
    loop: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });
})(jQuery);

// Function for sending email
function sendMail() {
  var body = document.getElementById("message").value;
  var subject = document.getElementById("subject").value;
  var email = document.getElementById("email").value;
  var name = document.getElementById("name").value;
  window.location.href =
    "mailto:sei-solution@gmail.com?subject=" +
    subject +
    "&body=" +
    "Message:" +
    "%0D%0A" +
    body +
    "%0D%0A%0D%0A" +
    "Name: " +
    name +
    "%0D%0A%0D%0A" +
    "Email Address: " +
    email +
    "";
}

//Mobile version

const mobileText = document.createElement("span");
const mobileNav = document.querySelector(".navbar-collapse");
mobileNav.appendChild(mobileText);

function change_image(image) {
  var container = document.getElementById("main-image");

  container.src = image.src;
}

document.addEventListener("DOMContentLoaded", function (event) {});

var dropdowns = document.querySelectorAll(".dropdown");

for (var i = 0; i < dropdowns.length; i++) {
  dropdowns[i].addEventListener("click", function (e) {
    for (var x = 0; x < dropdowns.length; x++) {
      dropdowns[x].querySelector(".dropdown-content").classList.add("hide");
    }

    e.currentTarget.querySelector(".dropdown-content").classList.toggle("hide");
  });
}
let pop = document.getElementById("pop-map");
let modal = document.getElementById("mapModal");
let mapIframe = document.getElementById("map-iframe");
let searchInput = document.getElementById("search-input");
let shopTable = document.getElementById("shop-table");
let globalMapUrl = `https://www.google.com/maps/d/embed?mid=1w5FGuiqR0IpJGszS-McN2YvlAblL7oc&ehbc=2E312F`;
let shopData = [
  {
    name: "SEI Japan",
    location: "Niigata, Japan",
    contact: "+81(0)252418200",
    person: "Mori",
    email: "sei.informationph@gmail.com",
    coordinates: { lat: 37.90492, lng: 139.04103 },
  },
  {
    name: "SEI Philippines",
    location:
      "175 Mayon Street corner Dapitan, Brgy. Sta. Teresita, Quezon City 1101",
    contact: "+639603463602",
    person: "store.seiph",
    email: "store.seiph@gmail.com",
    coordinates: { lat: 14.62207, lng: 120.99952 },
  },
  {
    name: "SEI Thailand",
    location:
      "Moo 4 Khlong Sam Subdistrict Khlong Luang District, Pathum Thani Province 12120",
    contact: "+63909611874",
    person: "Mori",
    email: "sei.informationph@gmail.com",
    coordinates: { lat: 14.06396, lng: 100.65771 },
  },
];

initializeModal();

function displayShopData(data) {
  let tableBody = shopTable.querySelector("tbody");
  tableBody.innerHTML = "";
  data.forEach((shop) => {
    let row = `<tr data-location="${shop.location}">
            <td class="branch-text">${shop.name}</td>
            <td>${shop.location}</td>
            <td>${shop.contact}<br>
            ${shop.person}<br>
            ${shop.email}</td>
            </tr>`;

    tableBody.innerHTML += row;
  });
}

function updateMap(lat, lng) {
  let mapUrl = `${globalMapUrl}&ll=${lat},${lng}&z=10`;
  mapIframe.src = mapUrl;
}

function filterShopData(searchValue) {
  return shopData.filter(
    (shop) =>
      shop.name.toLowerCase().includes(searchValue) ||
      shop.location.toLowerCase().includes(searchValue),
  );
}

function initializeModal() {
  displayShopData(shopData);
  mapIframe.src = globalMapUrl;
}

searchInput.addEventListener("input", () => {
  let searchValue = searchInput.value.toLowerCase();
  let filteredData = filterShopData(searchValue);
  displayShopData(filteredData);
});

shopTable.addEventListener("click", (event) => {
  let target = event.target.closest("tr");
  if (target) {
    let location = target.getAttribute("data-location");
    switch (location) {
      case "175 Mayon Street corner Dapitan, Brgy. Sta. Teresita, Quezon City 1101":
        updateMap(14.62207, 120.99952);
        break;
      case "Niigata, Japan":
        updateMap(37.51783, 138.92697);
        break;
      case "Moo 4 Khlong Sam Subdistrict Khlong Luang District, Pathum Thani Province 12120":
        updateMap(14.06396, 100.65771);
        break;
      default:
        mapIframe.src = globalMapUrl;
        break;
    }
  }
});
