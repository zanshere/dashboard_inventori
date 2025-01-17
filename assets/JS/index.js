// tailwind Configuration
tailwind.config = {
    theme: {
      extend: {
        colors: {
          clifford: '#da373d',
        }
      }
    }
  }

  // Code here

  const navbarToggler = document.getElementById('navbarToggler');
  const navbarTogglerContent = document.getElementById('navbarTogglerContent');
  const closeNavbar = document.getElementById('closeNavbar');
  
  navbarToggler.addEventListener('click', () => {
    navbarTogglerContent.classList.toggle('hidden');
  });

  closeNavbar.addEventListener('click', () => {
    navbarTogglerContent.classList.add('hidden');
  });