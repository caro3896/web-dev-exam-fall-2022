
// ####################################
// Toggle sidebar navigation

function toggleMenu(){
  const domMenu = document.getElementById('menu');
  if(domMenu.classList.contains('active')){
    domMenu.classList.remove('active')
  }else{
    domMenu.classList.add('active')
  }
}

// ####################################
// Toggle sign in modal

function toggleSignIn(){
  // console.log("sign in");
  const signInModal = document.getElementById('sign-in-modal');
  if(signInModal.classList.contains('show')){
    signInModal.classList.remove('show');
    document.querySelector(".sign-up").classList.add('hide');
    document.querySelector(".sign-in").classList.remove('hide'); 
  }else{
    signInModal.classList.add('show');
  }
}

// ####################################
// Toggle sign up modal

function toggleSignUp(){
  const signInForm = document.querySelector(".sign-in");
  const signUpForm = document.querySelector(".sign-up");
  if( signUpForm.classList.contains('hide')){
    signUpForm.classList.remove('hide');
    signInForm.classList.add('hide'); 
  }else{
    console.log("vis sign in modal")
    signUpForm.classList.add('hide');
    signInForm.classList.remove('hide'); 
  }
}

// ####################################
// Search flight from

function showFromResults(){
  // console.log("hello");
  const theInput = document.querySelector("#from-input").value;
  if( theInput.length > 0 ){
      document.querySelector("#from-results").style.display = "block";
      getCitiesFrom();
  }
  else {
      document.querySelector("#from-results").style.display = "none"; 
  }
}

function hideFromResults(){
  document.querySelector("#from-results").style.display = "none";
}

async function getCitiesFrom(){
  document.querySelector("#from-results").innerHTML = "";
  const searchFor = document.querySelector("#from-input").value;
  const connection = await fetch('api-get-cities-from?from_city_name='+searchFor);
  const flights = await connection.json();
  // console.log(flights);

  let allFlights = "";

  const originalFlightBlueprint = `
    <div class="from-results-container" onclick="selectFromCity()">
      <img src="#from-city-image#" alt="">
      <div>
        <p class="from-city-name">#from_city#</p>
        <p>#from_airport#</p>
      </div>
    </div>`;

  flights.forEach( flight => {
      // console.log(flight);
      let divFlight = originalFlightBlueprint;
      console.log(flight.from_city_img);
      divFlight = divFlight.replace('#from-city-image#', `images/city_thumbnails/${flight.from_city_img}`);
      divFlight = divFlight.replace('#from_city#', flight.from_city_name);
      divFlight = divFlight.replace('#from_airport#', flight.from_city_airport_name);
      allFlights += divFlight;
  });

  document.querySelector("#from-results").insertAdjacentHTML('afterbegin', allFlights); 
}

function selectFromCity(){
  const fromCityName = event.target.querySelector(".from-city-name").innerText;
  document.querySelector("#from-input").value = fromCityName;
  document.querySelector("#from-results").style.display  = "none";
  document.querySelector("#from-results").innerHTML = "";
}

// ####################################
// Search flight to

function showToResults(){
  const theInput = document.querySelector("#to-input").value;
  if( theInput.length > 0 ){
      document.querySelector("#to-results").style.display = "block";
      getCitiesTo();
  }
  else {
      document.querySelector("#to-results").style.display = "none"; 
  }
}

function hideToResults(){
  document.querySelector("#to-results").style.display = "none";
}

async function getCitiesTo(){
  document.querySelector("#to-results").innerHTML = "";
  const searchFor = document.querySelector("#to-input").value;
  const connection = await fetch('api-get-cities-to?to_city_name='+searchFor);
  const flights = await connection.json();

  let allFlights = "";

  const originalFlightBlueprint = `
    <div class="to-results-container" onclick="selectToCity()">
      <img src="#to-city-image#" alt="">
      <div>
        <p class="to-city-name">#to_city#</p>
        <p>#to_airport#</p>
      </div>
    </div>
  `
  flights.forEach( flight => {
      let divFlight = originalFlightBlueprint;
      divFlight = divFlight.replace('#to-city-image#', `images/city_thumbnails/${flight.to_city_img}`);
      divFlight = divFlight.replace('#to_city#', flight.to_city_name);
      divFlight = divFlight.replace('#to_airport#', flight.to_city_airport_name);
      allFlights += divFlight;
  });

  document.querySelector("#to-results").insertAdjacentHTML('afterbegin', allFlights); 
}

function selectToCity(){
  const toCityName = event.target.querySelector(".to-city-name").innerText;
  document.querySelector("#to-input").value = toCityName;
  document.querySelector("#to-results").style.display  = "none";
  document.querySelector("#to-results").innerHTML = "";
}

// ####################################
// Search for flights

async function getFlights(){
  document.querySelector("#flight-results").innerHTML = "";
  const fromCitySearch = document.querySelector("#from-input").value;
  const toCitySearch = document.querySelector("#to-input").value;
  const connection = await fetch('api-search-flights?from_city_name='+fromCitySearch+'&to_city_name='+toCitySearch);
  const flights = await connection.json();
  console.log(flights.length);

  if ( flights.length == 0 ){
    console.log("no flights");
    const noFlights = `
      <div class="no-flights">
        <p>Sorry, no flights matches your search.</p>
        <p>Please try again.</p>
      </div>
    `
    document.querySelector("#flight-results").insertAdjacentHTML('afterbegin', noFlights);
  }

  let allFlights = "";

  const originalFlightBlueprint = `
      <div class="flight">
          <div class="from-flight-container">
            <img src="#from-city-image#" alt="">
            <div>
              <p>#from_city#</p>
              <p>#from_city_airport#</p>
              <p>Departure: #departure_time#</p>
            </div>
          </div>
          <div class="to-flight-container">
            <img src="#to-city-image#" alt="">
            <div>
              <p>#to_city#</p>
              <p>#to_city_airport#</p>
              <p>Arrival: #arrival_time#</p>
            </div>
          </div>
      </div>
  `
  flights.forEach( flight => {
      console.log(flight);
      let divFlight = originalFlightBlueprint;
      divFlight = divFlight.replace('#from-city-image#', `images/city_thumbnails/${flight.from_city_img}`);
      divFlight = divFlight.replace('#from_city#', flight.from_city_name);
      divFlight = divFlight.replace('#from_city_airport#', flight.from_city_airport_name);
      divFlight = divFlight.replace('#departure_time#', flight.departure_time);
      divFlight = divFlight.replace('#to-city-image#', `images/city_thumbnails/${flight.to_city_img}`);
      divFlight = divFlight.replace('#to_city#', flight.to_city_name);
      divFlight = divFlight.replace('#to_city_airport#', flight.to_city_airport_name);
      divFlight = divFlight.replace('#arrival_time#', flight.arrival_time);
      allFlights += divFlight;
  });

  document.querySelector("#flight-results").insertAdjacentHTML('afterbegin', allFlights);
}

// ####################################
// Sign up

async function signUp(){
  const theForm = document.querySelector("#sign-up-form");
  const connection = await fetch('api-signup', {
      method: "POST",
      body: new FormData(theForm)
    });
  if ( !connection.ok ){
    console.log("error");
  }
  else {
    console.log("Success");
  }
}

// ####################################
// Delete flight
async function deleteFlight(flight){
  form = event.target.form;
  const connection = await fetch('api-delete-flight.php', {
      method: "POST",
      body : new FormData(form)
  });
  const data = await connection.json();
  if ( ! connection.ok ){
      console.log(data);
      return;
  };
  form.parentElement.remove();
};