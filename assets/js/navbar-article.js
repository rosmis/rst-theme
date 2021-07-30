const nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
        const offset = window.pageYOffset;
        
        if(offset > 75)
            nav.classList.add('scroll')
        else 
            nav.classList.remove('scroll')
        });


        // SCROLL ANIMATION
        window.onscroll = function() {
            myFunction();
        };
        
        function myFunction () {
            var winscroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrlled = (winscroll / height) * 110;
            document.getElementById('scroll_indicator').style.width = scrlled + "%";
        }