function Validate()
{
  // komunikat błędu
  var alert = document.getElementById("alert");
  // przycisk wysyłania
  var sendButton = document.getElementById("sendButton");
  
  // walidacja imienia
  var inputImie = document.getElementsByName("imie");
  var imie = inputImie[0].value;
  var wzorImie = /^[A-ZŁ][a-ząśćóńłżę]{2,60}$/;
  var rezultatImie = wzorImie.test(imie);
  
  // walidacja nazwiska
  var inputNazwisko = document.getElementsByName("nazwisko");
  var nazwisko = inputNazwisko[0].value;
  var wzorNazwisko 
  = /^[A-ZŁŻŹŚĆÓ][a-ząśćóńłżę]{1,60}(-[A-ZŁŻŚŹĆÓ][a-ząśćóńłżę]{1,60})?$/
  var rezultatNazwisko = wzorNazwisko.test(nazwisko);
  
  // walidacja ulicy
  var inputUlica = document.getElementsByName("ulica");
  var ulica = inputUlica[0].value;
  var wzorUlica
  = /^(\d{1,10} )?([A-ZŁŻŚŹĆÓ]{1,10}[a-ząśćóńłżę]{0,40})( [A-ZŁŚŻŹĆÓ]{1,10}[a-ząśćóńłżę]{0,40}){0,4}$/
  var rezultatUlica = wzorUlica.test(ulica);
  
  // walidacja nr domu
  var inputNrDomu = document.getElementsByName("nr_domu");
  var nrDomu = inputNrDomu[0].value;
  var wzorNrDomu = /^\d{1,5}([A-Z]|[a-z])?$/;
  var rezultatNrDomu = wzorNrDomu.test(nrDomu);
  
  // walidacja nr mieszkania
  var inputMieszkanie = document.getElementsByName("mieszkanie");
  var mieszkanie = inputMieszkanie[0].value;
  var wzorMieszkanie = /^\d{1,4}([A-Z]|[a-z])?$/;
  var rezultatMieszkanie = wzorMieszkanie.test(mieszkanie);
  if(mieszkanie === "") {
    rezultatMieszkanie = true;
  }
  
  // walidacja kodu pocztowego
  var inputPoczta = document.getElementsByName("poczta");
  var poczta = inputPoczta[0].value;
  var wzorPoczta = /^\d{2}-\d{3}$/;
  var rezultatPoczta = wzorPoczta.test(poczta);
  
  // walidacja miasta
  var inputMiasto = document.getElementsByName("miasto");
  var miasto = inputMiasto[0].value;
  var wzorMiasto 
  = /^[A-ZŁŻŹĆÓŚ][a-ząśćóńłżę]{1,60}( [A-ZŁŻŹĆÓŚ][a-ząśćóńłżę]{1,60}){0,4}$/;
  var rezultatMiasto = wzorMiasto.test(miasto);
  
  // walidacja uwag
  var inputUwagi = document.getElementsByName("uwagi");
  var uwagi = inputUwagi[0].value;
  var wzorUwagi = /^.{0,500}$/;
  var rezultatUwagi = wzorUwagi.test(uwagi);
  
  // walidacja nr telefonu
  var inputTel = document.getElementsByName("tel");
  var tel = inputTel[0].value;
  var wzorTel = /^\d{9}$/;
  var rezultatTel = wzorTel.test(tel);
  
  // walidacja daty urodzenia
  var inputData = document.getElementsByName("data");
  var data = inputData[0].value;
  var rezultatData = true;
  if (data === "") {
    rezultatData = false;
  }
  
  // walidacja hasła
  var inputHaslo = document.getElementsByName("haslo");
  var haslo = inputHaslo[0].value;
  var wzorHaslo = /^.{7,25}$/;
  var rezultatHaslo = wzorHaslo.test(haslo);
  
  // testowanie prawidłowości
  if (rezultatImie === false) {
    alert.innerHTML = "Nieprawidłowe imię.";
    alert.style.display = "block";
  }
  else if (rezultatNazwisko === false) {
    alert.innerHTML = "Nieprawidłowe nazwisko.";
    alert.style.display = "block";
  }
  else if (rezultatUlica === false) {
    alert.innerHTML = "Nieprawidłowa nazwa ulicy.";
    alert.style.display = "block";
  }
  else if (rezultatNrDomu === false) {
    alert.innerHTML = "Nieprawidłowy nr domu.";
    alert.style.display = "block";
  }
  else if (rezultatMieszkanie === false) {
    alert.innerHTML = "Nieprawidłowy nr mieszkania.";
    alert.style.display = "block";
  }
  else if (rezultatPoczta === false) {
    alert.innerHTML = "Nieprawidłowy kod pocztowy.";
    alert.style.display = "block";
  }
  else if (rezultatMiasto === false) {
    alert.innerHTML = "Nieprawidłowa nazwa miasta.";
    alert.style.display = "block";
  }
  else if (rezultatUwagi === false) {
    alert.innerHTML = "Przekroczono limit znaków w Uwagach.";
    alert.style.display = "block";
  }
  else if (rezultatTel === false) {
    alert.innerHTML = "Nieprawidłowy nr telefonu.";
    alert.style.display = "block";
  }
  else if (rezultatData === false) {
    alert.innerHTML = "Niewprowadzona data urodzenia.";
    alert.style.display = "block";
  }
  else if (rezultatHaslo === false) {
    alert.innerHTML = "Niezgodne z wytycznymi hasło.";
    alert.style.display = "block";
  }
  else {
    alert.style.display = "none";
    sendButton.style.display = "initial";
  }
}