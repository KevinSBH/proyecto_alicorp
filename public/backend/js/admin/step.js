const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", async () => {
    formStepsNum++;
    if (formStepsNum === 2) {
      // Validar Formulario
      const resultado = await validarFormulario();
      if (resultado === false) {
        formStepsNum --;
        return;
      } else {
        updateFormSteps();
        updateProgressbar();
      }
    } else {
      updateFormSteps();
      updateProgressbar();
    }
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}

//

const btnLanding = document.getElementById('btn-landing');
const btnWeb = document.getElementById('btn-web');
const btnCampana = document.getElementById('btn-campana');
const next_first = document.getElementById('next-first')
const selectJuegoContent = document.getElementById('selectJuegoContent')
const selectMarcaContent = document.getElementById('selectMarcaContent')
const juego_resumen = document.getElementById('juego-resumen')
const tipo_promo_bold = document.querySelectorAll('.tipo_promo_bold')

// btnLanding?.addEventListener('click', (e) => {
//   e.preventDefault();
//   btnLanding.classList.add('active-promo');
//   btnWeb.classList.remove('active-promo')
//   btnCampana.classList.remove('active-promo')
//   next_first.removeAttribute('disabled')
//   selectMarcaContent.classList.remove('col-md-6')
//   selectJuegoContent.classList.add('d-none')
//   juego_resumen.classList.add('d-none')
//   tipo_promo_bold.forEach(d => {
//     d.textContent = 'Landing Promocional'
//   })
// })

// btnWeb?.addEventListener('click', (e) => {
//   e.preventDefault();
//   btnLanding.classList.remove('active-promo');
//   btnWeb.classList.add('active-promo')
//   btnCampana.classList.remove('active-promo')
//   next_first.removeAttribute('disabled')
//   selectMarcaContent.classList.add('col-md-6')
//   selectJuegoContent.classList.remove('d-none')
//   juego_resumen.classList.remove('d-none')
//   tipo_promo_bold.forEach(d => {
//     d.textContent = 'Juego Web'
//   })
// })

// btnCampana?.addEventListener('click', (e) => {
//   e.preventDefault();
//   btnLanding.classList.remove('active-promo');
//   btnWeb.classList.remove('active-promo')
//   btnCampana.classList.add('active-promo')
//   next_first.removeAttribute('disabled')
//   selectMarcaContent.classList.add('col-md-6')
//   selectJuegoContent.classList.remove('d-none')
//   juego_resumen.classList.remove('d-none')
//   tipo_promo_bold.forEach(d => {
//     d.textContent = 'Juego Campaña'
//   })
// })


const btnCrear = document.getElementById('next-fin')
const form_proyecto = document.getElementById('form-proyecto')
const form_success = document.getElementById('form-success')
const modal_nuevo = document.getElementById('modal-nuevo')

// btnCrear?.addEventListener('click', (e) => {
//   form_proyecto.classList.add('d-none')
//   form_success.classList.remove('d-none')
//   form_success.classList.add('d-flex')
// })

modal_nuevo?.addEventListener('click', (e) => {
  reloadModal();
})

function reloadModal() {
  btnLanding.classList.remove('active-promo');
  btnWeb.classList.remove('active-promo')
  btnCampana.classList.remove('active-promo')
  form_proyecto.classList.remove('d-none')
  form_proyecto.classList.add('d-block')
  form_success.classList.remove('d-flex')
  form_success.classList.add('d-none')
  form_proyecto.reset()
  next_first.setAttribute('disabled', 'true')
  formStepsNum = 0;
  updateFormSteps();
  updateProgressbar();
}


function btnLandingPromocional() {
  btnLanding.classList.add('active-promo');
  btnWeb.classList.remove('active-promo')
  btnCampana.classList.remove('active-promo')
  next_first.removeAttribute('disabled')
  selectMarcaContent.classList.remove('col-md-6')
  selectJuegoContent.classList.add('d-none')
  juego_resumen.classList.add('d-none')
  tipo_promo_bold.forEach(d => {
    d.textContent = 'Landing Promocional'
  })
}


function btJuegonWeb() {
  btnLanding.classList.remove('active-promo');
  btnWeb.classList.add('active-promo')
  btnCampana.classList.remove('active-promo')
  next_first.removeAttribute('disabled')
  selectMarcaContent.classList.add('col-md-6')
  selectJuegoContent.classList.remove('d-none')
  juego_resumen.classList.remove('d-none')
  tipo_promo_bold.forEach(d => {
    d.textContent = 'Juego Web'
  })
}


function btnJuegoCampana() {
  btnLanding.classList.remove('active-promo');
  btnWeb.classList.remove('active-promo')
  btnCampana.classList.add('active-promo')
  next_first.removeAttribute('disabled')
  selectMarcaContent.classList.add('col-md-6')
  selectJuegoContent.classList.remove('d-none')
  juego_resumen.classList.remove('d-none')
  tipo_promo_bold.forEach(d => {
    d.textContent = 'Juego Campaña'
  })
}

function finishCreate() {
  form_proyecto.classList.add('d-none')
  form_success.classList.remove('d-none')
  form_success.classList.add('d-flex')
}

const nextInfo = document.querySelector(".btn-info-next");

async function validarFormulario() {
  
  const sNamePromocion = document.getElementById("nombrePromocion").value
  const sDescPromocion = document.getElementById("descPromocion").value
  const sJuegoPromocion = document.getElementsByName("selectJuego").value

  console.log(sNamePromocion, sDescPromocion)
  if (!sNamePromocion || !sDescPromocion) {
    alert("Completar todos los campos del formulario.")
    return false
  }

  return true;
}