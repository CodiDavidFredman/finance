// перебираем форму для отправки данных
function form (){
   let consumption = document.forms.consumption;
   let arr = [];
      for(let i=0;i<consumption.length;i++){
            if(consumption[i].localName ==="select"){
               arr.push('#' + consumption[i].id);
            };
      };
   return arr;
}
// обролюємо форми та добовляємо пошук по select
function updateForm(arr){
   for(let i=0;i<arr.length;i++){
      $(document).ready(function() {
         $(`${arr[i]}`).select2();
      });
   }
}
updateForm(form());


//  Функція по відкриванню змінної дати
function formOpenDateDeal() {
   const dateDeal = document.querySelectorAll('.date-deal')

   dateDeal.forEach(item => {
      item.addEventListener('click', function() {
         this.style.display = 'none'
         document.querySelector('.change_date').style.display = 'block'
      })
   })
}
formOpenDateDeal()

//  операція кнопок дохід/витрати/перекази
function operstionButtons() {

   const sectionForm = document.querySelector('section.form')
   const buttonsCalc = document.querySelectorAll('.button_calc')
   const formCalc = document.querySelector('.form_calculations')

   //  відкриваємо попап форму
   function openForm() {
      sectionForm.style.display = 'flex'
   }
   //  закриваємо попап форму
   function closeForm(e) {
      let elTraget = e.target

      if (elTraget.classList.contains('close_form') ) {
         sectionForm.style.display = 'none';
      } else if (elTraget.closest('.block-form')) {
         return
      } else {
         sectionForm.style.display = 'none';
      }
   }

   // вішаємо слухачі на кнопки
   buttonsCalc.forEach(button => {
      button.addEventListener('click', openForm)
   })

   //  вішаємо слухач на форму
   formCalc.addEventListener('click', e => closeForm(e))
}
operstionButtons()







