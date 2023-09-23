$(document).ready(function(){
    
      // get value of massage
      $('input[name="title"]').on('keydown, keyup', function () {
        var texInputValue = $('#titleText').val();
        $('.bar-text-wrapper .bar-title').html(texInputValue);
      });

      $('input[name="message"]').on('keydown, keyup', function () {
        var texInputValue = $('#massageText').val();
        $('.bar-text-wrapper .bar-message').html(texInputValue);
      });

      $('input[name="maintitle"]').on('keydown, keyup', function () {
        var texInputValue = $('#maintitleText').val();
        $('.bar-text-wrapper span.bar-subtitle.change').html(texInputValue);
      });

      $('input[name="agreement_text"]').on('keydown, keyup', function () {
        var btnInputValue = $('#buttonText').val();
        $(".bar-text-wrapper ").find(".bar_btn .cc-dismiss ").html(btnInputValue);
      });

      
      // set height

      
      $(document).on('click', '.up', function (e) {
        e.preventDefault();
        var value = $("#myNumber").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 250;
        }
        $("#myNumber").val(value);
        var borderheightval = $("#myNumber").val();
        var border_height= $('.pagemargin ').find('.preview_set ');
        border_height.css("height", borderheightval + "px");
      });
      $(document).on('click', '.down', function (e) {
        e.preventDefault();
        var value = $("#myNumber").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#myNumber").val(value);
        var borderheightval = $("#myNumber").val(); 
        var border_height= $('.pagemargin ').find('.preview_set ');
        border_height.css("height", borderheightval + "px");
      });
      $(document).on('click', '.bdown', function (e) {
        e.preventDefault();
        var value = $("#borderrad").val();
       if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#borderrad").val(value);
        var borderval = $("#borderrad").val();
        var border_rad= $('.bar-text-wrapper ').find(".bar_btn .cc-dismiss.save ");
        border_rad.css("border-radius", borderval + "px");
      });
      $(document).on('click', '.bup', function (e) {
        e.preventDefault();
        var value = $("#borderrad").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
    
        }
        $("#borderrad").val(value)
        var borderval = $("#borderrad").val();
        var border_rad= $('.bar-text-wrapper ').find(".bar_btn .cc-dismiss.save ");
        border_rad.css("border-radius", borderval + "px");
      });
      $(document).on('click', '.bwdown', function (e) {
        e.preventDefault();
        var value = $("#borwidth").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#borwidth").val(value);
        var borderwidthval = $("#borwidth").val();
        var border_width= $('.bar-text-wrapper ').find(".bar_btn .cc-dismiss.save ");
        border_width.css("border-width", borderwidthval + "px");
        border_width.css("border-style", "solid");
      });
      $(document).on('click', '.bwup', function (e) {
          e.preventDefault();
          var value = $("#borwidth").val();
          if (value != '') {
              value = parseInt(value) + 1;
          }
          else {
              value = 0;
          }
          $("#borwidth").val(value);
          var borderwidthval = $("#borwidth").val();
          var border_width= $('.bar-text-wrapper ').find(".bar_btn .cc-dismiss.save ");
          border_width.css("border-width", borderwidthval + "px");
          border_width.css("border-style", "solid");
      });
      $(document).on('click', '.zipdown', function (e) {
        e.preventDefault();
        var value = $("#zipcoderd").val();
       if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#zipcoderd").val(value);
        var borderval = $("#zipcoderd").val();
        var border_rad= $('.bar-text-wrapper ').find(".bar_btn .cc-dismiss.postcode ");
        border_rad.css("border-radius", borderval + "px");
      });
      $(document).on('click', '.zipup', function (e) {
        e.preventDefault();
        var value = $("#zipcoderd").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
    
        }
        $("#zipcoderd").val(value)
        var borderval = $("#zipcoderd").val();
        var border_rad= $('.bar-text-wrapper ').find(".bar_btn .cc-dismiss.postcode ");
        border_rad.css("border-radius", borderval + "px");
      });
      $(document).on('click', '.zipwdown', function (e) {
        e.preventDefault();
        var value = $("#zipborwidth").val();
       if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#zipborwidth").val(value);
        var borderval = $("#zipborwidth").val();
        var border_rad= $('.bar-text-wrapper ').find(".bar_btn .cc-dismiss.postcode ");
        border_rad.css("border-width", borderval + "px");
        border_rad.css("border-style", "solid");
      });
      $(document).on('click', '.zipwup', function (e) {
        e.preventDefault();
        var value = $("#zipborwidth").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
    
        }
        $("#zipborwidth").val(value)
        var borderval = $("#zipborwidth").val();
        var border_rad= $('.bar-text-wrapper ').find(".bar_btn .cc-dismiss.postcode ");
        border_rad.css("border-width", borderval + "px");
        border_rad.css("border-style", "solid");
      });


      // font size change

      $('.titlefont').change(function () {
        var select=$(this).find(':selected').val();    
        $(".bar-title").css("font-size", select);
      });

      $('.msgfont').change(function () {
        var select=$(this).find(':selected').val();    
        $(".bar-message").css("font-size", select);
        $(".bar-subtitle").css("font-size", select);
      });

      $(".multipleselect").select2({
        tags: true
      });
      
      $("ul.select2-selection__rendered").sortable({
        containment: 'parent'
      });
      $(document).on('keypress', '.select2-search__field', function () {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
          event.preventDefault();
        }
      });
      // banner background color
    
      const body1 = document.querySelector(".preview_set");
      const input1 = document.getElementById("colorPickerbutton3");
      const colorCode1 = document.getElementById("colorCodebutton3");
      setColor1();
      input1.addEventListener("input", setColor1);
      function setColor1() {
          body1.style.backgroundColor = input1.value;
          colorCode1.innerHTML = input1.value;
      }

      // title color color
    
      const body2 = document.querySelector(".bar-title");
      const input2 = document.getElementById("popuptitle");
      const colorCode2 = document.getElementById("popuptitletext");
      setColor2();
      input2.addEventListener("input", setColor2);
      function setColor2() {
          body2.style.color = input2.value;
      }

      // message  color
    
      const body3 = document.querySelector(".bar-message");
      const body4 = document.querySelector(".bar-subtitle");
      const input3 = document.getElementById("popupmsglink");
      const colorCode3 = document.getElementById("popupmessage");
      setColor3();
      input3.addEventListener("input", setColor3);
      function setColor3() {
          body3.style.color = input3.value;
          body4.style.color = input3.value;
      }

        // button background color
        const body5 = document.querySelector("a.cc-dismiss.save");
        const input5 = document.getElementById("buttonbackcolor");
        const colorCode5 = document.getElementById("buttoncolor");
        setColor5();
        input5.addEventListener("input", setColor5);
        function setColor5() {
            body5.style.backgroundColor = input5.value;
            colorCode5.innerHTML = input5.value;
        }

         // button text  color
      const body6 = document.querySelector("a.cc-dismiss.save ");
      const input6 = document.getElementById("buttontextcolor");
      const colorCode6 = document.getElementById("buttontext");
      setColor6();
      input6.addEventListener("input", setColor6);
      function setColor6() {
          body6.style.color = input6.value;
      }

        //  button border color
        const body7 = document.querySelectorAll("a.cc-dismiss.save");
        const body8 = document.querySelectorAll(".cc-close");
        const input7 = document.getElementById("buttonbordercolor");
        const colorCode7 = document.getElementById("buttonborder");    
        setColor7();
        input7.addEventListener("input", setColor7);
        function setColor7() {
            for (let i = 0; i < body7.length; i++) {
                body7[i].style.borderColor = input7.value;
                body8[i].style.color = input7.value;
              }
            colorCode7.innerHTML = input7.value;
        }  

       // zipcode text  color
     
       const body9 = document.querySelector(".postcode ");
       const input9 = document.getElementById("zipcodetextcolor");
       const colorCode9 = document.getElementById("zipcodetext");
       setColor9();
       input9.addEventListener("input", setColor9);
       function setColor9() {
           body9.style.color = input9.value;
       }
 
         //  zipcode border color
         const body10 = document.querySelectorAll(".postcode");
         const input10 = document.getElementById("zipcodebordercolor");
         const colorCode10 = document.getElementById("zipcodeborder");    
         setColor10();
         input10.addEventListener("input", setColor10);
         function setColor10() {
             for (let i = 0; i < body10.length; i++) {
                 body10[i].style.borderColor = input10.value;
               }
             colorCode10.innerHTML = input10.value;
         } 

         // zipcode background color
    
        const body11 = document.querySelector(".postcode");
        const input11 = document.getElementById("zipbuttonbackcolor");
        const colorCode11 = document.getElementById("Zipcode");
         setColor11();
         input11.addEventListener("input", setColor11);
         function setColor11() {
             body11.style.backgroundColor = input11.value;
             colorCode11.innerHTML = input11.value;
         }


      
});