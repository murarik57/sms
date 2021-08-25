                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
       initialCountry: "auto",
       geoIpLookup: getIp,
       preferredCountries: ["in", "gb", "us", "de"],
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });

    
function process(event) {
event.preventDefault();

 const phoneNumber = phoneInput.getNumber();
 console.log(phoneNumber);
    $("#phone2").val(phoneNumber);
}
    
    function getIp(callback) {
 fetch('https://ipinfo.io/json?token=eaf2a7b5146f6c', { headers: { 'Accept': 'application/json' }})
   .then((resp) => resp.json())
   .catch(() => {
     return {
       country: 'us',
     };
   })
   .then((resp) => callback(resp.country));
}
    
 </script>
</html>
