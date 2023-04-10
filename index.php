<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<section data-aos="fade-up" class="section_5">
 
    <div class="messageTable mx-2 mx-md-5 d-flex align-items-center justify-content-center">
      <div class="container-sm">
        <div class="messageTable mx-2 mx-md-5 d-flex align-items-center justify-content-center">
          <div class="row mx-5 my-3 w-100 gap-3 gap-md-0">
            <div class="col-md-5 col-12 d-flex align-items-center justify-content-md-end justify-content-center"><h2 class="text-white">Участвуйте бесплатно в конференции «Бизнес74»</h2></div>
            <div class="col-md-7 col-12 d-flex align-items-center justify-content-md-end justify-content-center"><button class="fs-4"  >Зарегестрируйтесь</button></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section data-aos="fade-up" class="section_6 my-5">
  <div class="container-sm">
    <div class="row">
      <div class="col d-xl-none d-block"><div class="firstUl">
            <div class="h2 mainTheme">Для кого:</div>
            <ul class="text-white">
              <li>Предпринимателей и владельцев бизнеса</li>
              <li>Генеральных и коммерческих директоров</li>
              <li>Директоров по маркетингу,  развитию и продажам</li>
              <li>Руководителей и менеджеров</li>
           </ul>
          </div></div>
      <div class="col-12 col-xl-6 my-3">
        <img class="w-100" src="./img/section_6/img.svg" alt="">
      </div>
      <div class="col-12 col-xl-6">
        <div class="wrapper">
          <div class="firstUl d-none d-xl-block">
            <div class="h2 mainTheme">Для кого:</div>
            <ul class="text-white">
              <li>Предпринимателей и владельцев бизнеса</li>
              <li>Генеральных и коммерческих директоров</li>
              <li>Директоров по маркетингу,  развитию и продажам</li>
              <li>Руководителей и менеджеров</li>
           </ul>
          </div>
          <div class="secondUl">
            <div class="h2 mainTheme">Вы узнаете:</div>
            <ul class="text-white">
              <li>Как привлечь клиентов в интернете и занять ТОП выдачи</li>
              <li>Как подобрать инструменты для удаленной работы</li>
              <li>Как использовать опыт лучших спикеров для своих проектов</li>
              <li>Что нас ждет в обновленной версии «Инсайдер»</li>
              <li>Как перестать сливать рекламный бюджет</li>
              <li>Только на конференции «Бизнес74» вы встречаетесь с экспертами, забираете их знания и получаете ответы на свои вопросы</li>
              <li>А еще вас ждет: нетворкинг, инструменты для роста и подарки</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section data-aos="fade-up" class="section_7 my-5">
  <div class="container-sm">
    <h2 class="mainTheme">Организаторы</h2>
    <div class="row my-3">
      <div class="col"><img class="w-100 part-1" src="./img/section_7/1.png" alt=""></div>
      <div class="col d-flex align-items-center"><img class="w-100 part-2" src="./img/section_7/2.png" alt=""></div>
      <div class="col d-flex align-items-center"><img class="w-100 part-3" src="./img/section_7/3.png" alt=""></div>
    </div>
  </div>
</section>
<section data-aos="fade-up" class="section_8 my-5">
  <script>function getAnswer(id){
            document.querySelector(`.section_8 .answer[data-id="${id}"]`).classList.toggle('d-none');
            const btn = document.querySelector(`.section_8 button[data-id="${id}"]`);
            btn.classList.toggle('mainTheme')
            if(btn.innerHTML == "+"){btn.innerHTML = '-'}else{btn.innerHTML = '+';};
          }
  </script>
  <div class="container-sm">
    <div class="h2 mainTheme">Вопрос-ответ</div>
    <div class="wrapper text-white">
      <div class="quistion-answer">
        <div class="question">
          <p>Сколько стоит участие в конференции «Бизнес74»?</p>
          <button data-id="0" onclick="getAnswer('0')" ">+</button>
        </div>
        <div data-id="0" class="answer text-secondary d-none">
          Участие бесплатное.
        </div>
      </div>
      <div class="quistion-answer">
      <div class="question">
          <p>Что нужно для посещения?</p>
          <button data-id="1" onclick="getAnswer('1')" ">+</button>
        </div>
        <div data-id="1" class="answer text-secondary d-none">
            Вход свободный, для посещения нет требований.
        </div>
      </div>
        
      <div class="quistion-answer">
      <div class="question">
          <p>Будет ли запись докладов?</p>
          <button data-id="2" onclick="getAnswer('2')" ">+</button>
        </div>
        <div data-id="2" class="answer text-secondary d-none">
            Запись докладов будет доступна на общедоступном портале.
        </div>
      </div>
        
      <div class="quistion-answer">
      <div class="question">
          <p>Как я могу получить презентации докладов?</p>
          <button data-id="3" onclick="getAnswer('3')" ">+</button>
        </div>
        <div data-id="3" class="answer text-secondary d-none">
          Во вкладке "Записи докладов" вы сможете скачать запись.
        </div>
      </div>
      
    </div>
  </div>
</section>
<section data-aos="fade-up" class="section_9 my-5">
  <div class="container-sm">
  <div class="row">
    <div class="firstcol col-12 col-md-6 d-flex align-items-center">
      <div class="element">
      <div class="form">
        <h2 class="mainTheme">Укажите свои контактные данные</h2>
        <form action="">
          <div class="field">
            <label class="text-secondary" for="name">ФИО*</label>
            <input id="name" name="name" type="name" required>
          </div>
          <div class="field">
            <label class="text-secondary" for="tel">Контактный телефон*</label>
            <input id="tel" name="tel" type="tel" required>
          </div>
          <div class="field">
            <label class="text-secondary" for="email">Электронная почта*</label>
            <input id="email" name="email" type="email" required>
          </div>
          <label class="text-white" for="">*Все поля обязательны к заполнению</label><br>
          <div class="checkbox">
            <script>
              function checkCheckBox(){
                const btn = document.querySelector('.section_9 .btnReg[data-id="1"]')
                if(document.querySelector('.section_9 #checkbox').checked){
                btn.removeAttribute('disabled');
                btn.classList.remove('btnRegDisabled')
                }
                else{
                  btn.setAttribute('disabled','1');
                  btn.classList.add('btnRegDisabled')
                }
              };
            </script>
            <input id="checkbox" onclick="checkCheckBox()" type="checkbox"> 
            <label for="checkbox" class="text-white">я согласен на обработку персональных данных и получение рассылки</label>
          </div>

          <input data-id="1" disabled class="btnReg btnRegDisabled" type="submit" value="Регистрация">
        </form>
      </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="wrapper my-3">
        <img class="w-100 d-none d-md-block" src="./img/section_9/logo.svg" alt="">
        <img class="w-100" src="./img/section_9/img.svg" alt="">
      </div>
    </div>
  </div>
  </div>
</section>

<footer class="footer">
    <div class="container-sm">
      <div class="row">
        <div class="col-6 order-last order-sm-first my-5">
          <img class="w-100" src="./img/footer/logo.svg" alt="">
          <h2 class="text-white">Мы в соц. сетях</h2>
          <div class="contacts">
            <a href=""><img class="w-100" src="./img/footer/vk.svg" alt=""></a>
            <a href=""><img class="w-100" src="./img/footer/tele.svg" alt=""></a>
            <a href=""><img class="w-100" src="./img/footer/wp.svg" alt=""></a>
          </div>
        </div>
        <div class="col-6 order-first order-sm-last my-5">
        <nav>
            <ul class="">
            <li>
              <a href="">О мероприятие</a>
            </li>
            <li>
              <a  href="">Спикеры</a>
            </li>
            <li>
              <a  href="">Программа</a>
            </li>
            <li>
              <a href="">Регистрация</a>
            </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
</footer>










<!-- connected lib -->
<!-- bootstrap v.5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- jquery 3.x -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>


<!-- aos -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

<!-- connected lib -->
<!-- connected your css/js -->
<link rel="stylesheet" href="./css/main.css">
<script src="./app/main.js"></script>
<link rel="stylesheet" href="./css/section_5/section_5.css">
<link rel="stylesheet" href="./css/section_6/section_6.css">
<link rel="stylesheet" href="./css/section_7/section_7.css">
<link rel="stylesheet" href="./css/section_8/section_8.css">
<link rel="stylesheet" href="./css/section_9/section_9.css">
<link rel="stylesheet" href="./css/footer/footer.css">
<!-- connected your css/js -->
</body>
</html>