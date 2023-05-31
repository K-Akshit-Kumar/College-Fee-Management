        // INSPECT DISABLE
        document.onkeydown=function(e){
            if(event.keyCode ==123){
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.chartCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.KeyCode == 'U'.charAtCode(0)){
                return false;
            }
        };
        
        // LOADER
        var loader = document.getElementById("preload");
            window.addEventListener("load",function(){
            loader.style.display = "none";
        });
         
        //LOGOUT
        function logout(){
                // window.location.replace("https://miniproject13440.000webhostapp.com/admin_Login.html");
                window.location.replace("../admin_Login.html");
        }

        //DARK and WHITE MODE
        // function mode(modeValue){

        // }

        //SIDEBAR
        function menu(){
            var x = document.getElementById("sidebar");
            if(x.style.display === "none"){  
                x.style.display = "block";
                document.getElementById("menuIcon").src = "https://cdn-icons-png.flaticon.com/512/3856/3856213.png";
            }else{
                x.style.display = "none";
                document.getElementById("menuIcon").src = "https://cdn-icons-png.flaticon.com/512/4204/4204600.png";   
            }
        }

        //SIDEBAR MENU
        var whitesmoke = "whitesmoke";
        var header_color = "lightgray";
        
        function show1(){
            document.getElementById("op1").style.backgroundColor = header_color;
            document.getElementById("op2").style.backgroundColor = whitesmoke;
            document.getElementById("op3").style.backgroundColor = whitesmoke;
            document.getElementById("op4").style.backgroundColor = whitesmoke;
            document.getElementById("op5").style.backgroundColor = whitesmoke;
            document.getElementById("op6").style.backgroundColor = whitesmoke;
            document.getElementById("op7").style.backgroundColor = whitesmoke;
            document.getElementById("welcome").style.display = "none";
            document.getElementById("dashboard").style.display = "block";
            document.getElementById("newAdmission").style.display = "none";
            document.getElementById("feeDetails").style.display = "none";
            // document.getElementById("setFees").style.display = "none";
            document.getElementById("checkPayments").style.display = "none";
            document.getElementById("checkDues").style.display = "none";
            document.getElementById("changePassword").style.display = "none";
            document.getElementById("supplyFee").style.display = "none";
        }
        function show2(){
            document.getElementById("op2").style.backgroundColor = header_color;
            document.getElementById("op1").style.backgroundColor = whitesmoke;
            document.getElementById("op3").style.backgroundColor = whitesmoke;
            document.getElementById("op4").style.backgroundColor = whitesmoke;
            document.getElementById("op5").style.backgroundColor = whitesmoke;
            document.getElementById("op6").style.backgroundColor = whitesmoke;
            document.getElementById("op7").style.backgroundColor = whitesmoke;
            document.getElementById("welcome").style.display = "none";
            document.getElementById("dashboard").style.display = "none";
            document.getElementById("newAdmission").style.display = "block";
            document.getElementById("feeDetails").style.display = "none";
            // document.getElementById("setFees").style.display = "none";
            document.getElementById("checkPayments").style.display = "none";    
            document.getElementById("checkDues").style.display = "none";
            document.getElementById("changePassword").style.display = "none";
            document.getElementById("supplyFee").style.display = "none";
        }
        function show3(){
            document.getElementById("op3").style.backgroundColor = header_color;
            document.getElementById("op1").style.backgroundColor = whitesmoke;
            document.getElementById("op2").style.backgroundColor = whitesmoke;
            document.getElementById("op4").style.backgroundColor = whitesmoke;
            document.getElementById("op5").style.backgroundColor = whitesmoke;
            document.getElementById("op6").style.backgroundColor = whitesmoke;
            document.getElementById("op7").style.backgroundColor = whitesmoke;
            document.getElementById("welcome").style.display = "none";
            document.getElementById("dashboard").style.display = "none";
            document.getElementById("newAdmission").style.display = "none";
            document.getElementById("feeDetails").style.display = "block";
            // document.getElementById("setFees").style.display = "none";
            document.getElementById("checkPayments").style.display = "none";
            document.getElementById("checkDues").style.display = "none";
            document.getElementById("changePassword").style.display = "none";
            document.getElementById("supplyFee").style.display = "none";
        }
        function show4(){
            document.getElementById("op4").style.backgroundColor = header_color;
            document.getElementById("op1").style.backgroundColor = whitesmoke;
            document.getElementById("op2").style.backgroundColor = whitesmoke;
            document.getElementById("op3").style.backgroundColor = whitesmoke;
            document.getElementById("op5").style.backgroundColor = whitesmoke;
            document.getElementById("op6").style.backgroundColor = whitesmoke;
            document.getElementById("op7").style.backgroundColor = whitesmoke;
            document.getElementById("welcome").style.display = "none";
            document.getElementById("dashboard").style.display = "none";
            document.getElementById("newAdmission").style.display = "none";
            document.getElementById("feeDetails").style.display = "none";
            // document.getElementById("setFees").style.display = "none";
            document.getElementById("checkPayments").style.display = "block";
            document.getElementById("checkDues").style.display = "none";
            document.getElementById("changePassword").style.display = "none";
            document.getElementById("supplyFee").style.display = "none";
        }
        function show5(){
            document.getElementById("op5").style.backgroundColor = header_color;
            document.getElementById("op1").style.backgroundColor = whitesmoke;
            document.getElementById("op2").style.backgroundColor = whitesmoke;
            document.getElementById("op3").style.backgroundColor = whitesmoke;
            document.getElementById("op4").style.backgroundColor = whitesmoke;
            document.getElementById("op6").style.backgroundColor = whitesmoke;
            document.getElementById("op7").style.backgroundColor = whitesmoke;
            document.getElementById("welcome").style.display = "none";
            document.getElementById("dashboard").style.display = "none";
            document.getElementById("newAdmission").style.display = "none";
            document.getElementById("feeDetails").style.display = "none";
            // document.getElementById("setFees").style.display = "none";
            document.getElementById("checkPayments").style.display = "none";
            document.getElementById("checkDues").style.display = "block";
            document.getElementById("changePassword").style.display = "none";
            document.getElementById("supplyFee").style.display = "none";
        }
        function show6(){
            document.getElementById("op6").style.backgroundColor = header_color;
            document.getElementById("op1").style.backgroundColor = whitesmoke;
            document.getElementById("op2").style.backgroundColor = whitesmoke;
            document.getElementById("op3").style.backgroundColor = whitesmoke;
            document.getElementById("op4").style.backgroundColor = whitesmoke;
            document.getElementById("op5").style.backgroundColor = whitesmoke;
            document.getElementById("op7").style.backgroundColor = whitesmoke;
            document.getElementById("welcome").style.display = "none";
            document.getElementById("dashboard").style.display = "none";
            document.getElementById("newAdmission").style.display = "none";
            document.getElementById("feeDetails").style.display = "none";
            // document.getElementById("setFees").style.display = "none";
            document.getElementById("checkPayments").style.display = "none";
            document.getElementById("checkDues").style.display = "none";
            document.getElementById("changePassword").style.display = "block";
            document.getElementById("supplyFee").style.display = "none";
        }
        function show7(){
            document.getElementById("op7").style.backgroundColor = header_color;
            document.getElementById("op6").style.backgroundColor = whitesmoke;
            document.getElementById("op1").style.backgroundColor = whitesmoke;
            document.getElementById("op2").style.backgroundColor = whitesmoke;
            document.getElementById("op3").style.backgroundColor = whitesmoke;
            document.getElementById("op4").style.backgroundColor = whitesmoke;
            document.getElementById("op5").style.backgroundColor = whitesmoke;
            document.getElementById("welcome").style.display = "none";
            document.getElementById("dashboard").style.display = "none";
            document.getElementById("newAdmission").style.display = "none";
            document.getElementById("feeDetails").style.display = "none";
            // document.getElementById("setFees").style.display = "none";
            document.getElementById("checkPayments").style.display = "none";
            document.getElementById("checkDues").style.display = "none";
            document.getElementById("changePassword").style.display = "none";
            document.getElementById("supplyFee").style.display = "block";
        }

        const th=document.getElementById("thead");
        const th1=document.getElementById("thead1");
        const th2=document.getElementById("thead2");
        const tr=document.getElementsByTagName("tr");

        function stsearch(){
            var value1=search.value.toUpperCase();
            for(var i=0;i<tr.length;i++){
                var td=tr[i];
                var text=td.textContent;
                if(text.toUpperCase().indexOf(value1)>-1){
                    td.style.display="";

                }
                else{
                    td.style.display="none";
                    th.style.display="";
                }
             }
        }
        function stsearch1(){
            var value1=search1.value.toUpperCase();
            for(var i=0;i<tr.length;i++){
                var td=tr[i];
                var text=td.textContent;
                if(text.toUpperCase().indexOf(value1)>-1){
                    td.style.display="";
                }
                else{
                    td.style.display="none";
                    th1.style.display="";
                }
             }
        }
        function stsearch2(){
            var value1=search2.value.toUpperCase();
            for(var i=0;i<tr.length;i++){
                var td=tr[i];
                var text=td.textContent;
                if(text.toUpperCase().indexOf(value1)>-1){
                    td.style.display="";

                }
                else{
                    td.style.display="none";
                    th2.style.display="";
                }
             }
        }

        var search=document.querySelector("#fs");
        const search1=document.querySelector("#fs1");
        const search2=document.querySelector("#fs2");
        search.addEventListener("keydown",stsearch);
        search1.addEventListener("keyup",stsearch1);
        search2.addEventListener("keyup",stsearch2);