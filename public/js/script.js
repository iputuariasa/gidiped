const menuBackground = document.getElementById('menu');

function toggleMenuBlur() {
  if (window.scrollY > 50) {
    menuBackground.classList.add('bgMenuBlur');
  } else {
    menuBackground.classList.remove('bgMenuBlur');
  }
}

window.addEventListener("scroll", toggleMenuBlur);


// Menu Active

document.addEventListener('DOMContentLoaded', function () {
  // Dapatkan semua link menu
  const menuLinks = document.querySelectorAll('.menu');
  
  // Dapatkan semua section dengan ID yang ditautkan dari menu
  const sections = Array.from(menuLinks).map(link => {
    const targetId = link.getAttribute('href').replace('#', '');
    return document.getElementById(targetId);
  });

  // Fungsi untuk mengecek apakah section dalam viewport
  const checkSectionInView = () => {
    let currentActiveIndex = -1;

    sections.forEach((section, index) => {
      const rect = section.getBoundingClientRect();
      const offsetTop = rect.top + window.scrollY;
      
      if (window.scrollY >= offsetTop - 100 && window.scrollY < offsetTop + section.offsetHeight - 100) {
        currentActiveIndex = index;
      }
    });

    // Update kelas active
    menuLinks.forEach((link, index) => {
      if (index === currentActiveIndex) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  };

  // Tambahkan event listener untuk scroll
  window.addEventListener('scroll', checkSectionInView);

  // Panggil fungsi saat halaman dimuat
  checkSectionInView();
});

// Menu Mobile Active
const menuMobile = document.getElementById('btnmenu');
const sidebar = document.getElementById('sidebar');

function menuMobileToggle() {
console.log('OK!'); // Debug log
sidebar.classList.toggle("hidden"); // Toggle kelas "hidden" pada sidebar
}

// Tambahkan event listener ke tombol menu
menuMobile.addEventListener("click", menuMobileToggle);
