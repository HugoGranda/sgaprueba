/*=============== SHOW HIDDEN - PASSWORD ===============*/
const showHiddenPass = (loginPass, loginEye) => {
  const input = document.getElementById(loginPass),
    iconEye = document.getElementById(loginEye);

  /*iconEye.addEventListener("click", () => {
    // Change password to  text
    if (input.type == "password") {
      // Switch to text
      input.type = "text";

      // Icon change
      iconEye.classList.add("ri-eye-line");
      iconEye.classList.remove("ri-eye-off-line");
    } else {
      // Change to password
      input.type = "password";

      // Icon change
      iconEye.classList.remove("ri-eye-line");
      iconEye.classList.add("ri-eye-off-line");
    }
  });*/
};

showHiddenPass("loginPass", "loginEye");

/* === RESTORE PASSWORD === */
const restorePassword = () => {
  const loginRestore = document.getElementById("loginRestore"),
    loginInputs = document.querySelectorAll(".login__input"),
    posteriores = document.querySelectorAll(".posterior"),
    iniciales = document.querySelectorAll(".inicial");

  let stateRestore = false;

  /*loginRestore.addEventListener("click", () => {
    // Limpiar Inputs
    loginInputs.forEach((input) => {
      input.value = "";
    });

    // Cambiar inputs
    if (!stateRestore) {
      posteriores.forEach((posterior) => {
        posterior.classList.remove("desaparecer");
      });

      iniciales.forEach((inicial) => {
        inicial.classList.add("desaparecer");
      });

      loginRestore.textContent = "Inicial Sesión";
      stateRestore = true;
    } else {
      iniciales.forEach((inicial) => {
        inicial.classList.remove("desaparecer");
      });

      posteriores.forEach((posterior) => {
        posterior.classList.add("desaparecer");
      });

      loginRestore.textContent = "¿Olvidaste tu contraseña?";
      stateRestore = false;
    }
  });*/
};

restorePassword();

/* === PARTICLE JS === */
particlesJS({
  particles: {
    number: {
      value: 100,
      density: {
        enable: true,
        value_area: 800,
      },
    },
    color: {
      value: "#ffffff",
    },
    shape: {
      type: "circle",
      stroke: {
        width: 0,
        color: "#000000",
      },
      polygon: {
        nb_sides: 5,
      },
      image: {
        src: "img/github.svg",
        width: 100,
        height: 100,
      },
    },
    opacity: {
      value: 0.5,
      random: false,
      anim: {
        enable: false,
        speed: 1,
        opacity_min: 0.1,
        sync: false,
      },
    },
    size: {
      value: 3,
      random: true,
      anim: {
        enable: false,
        speed: 40,
        size_min: 0.1,
        sync: false,
      },
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#ffffff",
      opacity: 0.4,
      width: 1,
    },
    move: {
      enable: true,
      speed: 6,
      direction: "none",
      random: false,
      straight: false,
      out_mode: "out",
      bounce: false,
      attract: {
        enable: false,
        rotateX: 600,
        rotateY: 1200,
      },
    },
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: {
        enable: false,
        mode: "repulse",
      },
      onclick: {
        enable: true,
        mode: "push",
      },
      resize: true,
    },
    modes: {
      grab: {
        distance: 400,
        line_linked: {
          opacity: 1,
        },
      },
      bubble: {
        distance: 400,
        size: 40,
        duration: 2,
        opacity: 8,
        speed: 3,
      },
      repulse: {
        distance: 200,
        duration: 0.4,
      },
      push: {
        particles_nb: 4,
      },
      remove: {
        particles_nb: 2,
      },
    },
  },
  retina_detect: true,
});
