
function getValue() {
 var inputValue = document.getElementById("zip").value;
 if(inputValue == 85086
    || inputValue == 85262
    || inputValue == 85266
    || inputValue == 85331
    || inputValue == 85377
    || inputValue == 85262
    || inputValue == 85266
    || inputValue == 85331
    || inputValue == 85377

 ) { 
   document.getElementById("morning").style.display = "block";
   document.getElementById("noon").style.display = "block";
   document.getElementById("afternoon").style.display = "block";
   document.getElementById("date-pick").style.display = "block";
   document.getElementById("no-service").style.display = "none";
   document.getElementById("no-service-time").style.display = "none";

    var input = document.getElementById('date');

    input.addEventListener('input', function () {
      var selectedDate = new Date(input.value);
      var selectedDayOfWeek = selectedDate.getDay(); // 0 is Sunday, 1 is Monday, ..., 6 is Saturday

      // Allow only Monday dates
      if (selectedDayOfWeek !== 1) {
        alert('Sorry, We only Service your Area on MONDAYS, Please select a Monday Date');
        input.value = ''; // Reset the input value
      }
    });
 } 

 else if (inputValue == 85268
    || inputValue == 85269
    || inputValue == 85118
    || inputValue == 85119) {
        document.getElementById("morning").style.display = "block";
        document.getElementById("noon").style.display = "block";
        document.getElementById("afternoon").style.display = "block";
        document.getElementById("date-pick").style.display = "block";
        document.getElementById("no-service").style.display = "none";
        document.getElementById("no-service-time").style.display = "none";
     
         var input = document.getElementById('date');
     
         input.addEventListener('input', function () {
           var selectedDate = new Date(input.value);
           var selectedDayOfWeek = selectedDate.getDay(); // 0 is Sunday, 1 is Monday, ..., 6 is Saturday
     
           // Allow only Monday dates
           if (selectedDayOfWeek !== 4) {
             alert('Sorry, We only Service your Area on THURSDAYS, Please select a Thursday Date');
             input.value = ''; // Reset the input value
           }
         });

 }

 else if (inputValue == 85138
    || inputValue == 85139
    || inputValue == 85147) {
        document.getElementById("morning").style.display = "block";
        document.getElementById("noon").style.display = "block";
        document.getElementById("afternoon").style.display = "block";
        document.getElementById("date-pick").style.display = "block";
        document.getElementById("no-service").style.display = "none";
        document.getElementById("no-service-time").style.display = "none";
     
         var input = document.getElementById('date');
     
         input.addEventListener('input', function () {
           var selectedDate = new Date(input.value);
           var selectedDayOfWeek = selectedDate.getDay(); // 0 is Sunday, 1 is Monday, ..., 6 is Saturday
     
           // Allow only Monday dates
           if (selectedDayOfWeek !== 2) {
             alert('Sorry, We only Service your Area on TUESDAYS, Please select a Tuesday Date');
             input.value = ''; // Reset the input value
           }
         });

 }

 else if (inputValue == 85123
    || inputValue == 85324
    || inputValue == 85122
    || inputValue == 85130
    || inputValue == 85193
    || inputValue == 85194
    || inputValue == 85128
    || inputValue == 85194
    || inputValue == 85128
    || inputValue == 85132
    || inputValue == 85143
    || inputValue == 85085
    || inputValue == 85086
    || inputValue == 85087
    || inputValue == 85331) {
        document.getElementById("morning").style.display = "block";
        document.getElementById("noon").style.display = "block";
        document.getElementById("afternoon").style.display = "block";
        document.getElementById("date-pick").style.display = "block";
        document.getElementById("no-service").style.display = "none";
        document.getElementById("no-service-time").style.display = "none";
     
         var input = document.getElementById('date');
     
         input.addEventListener('input', function () {
           var selectedDate = new Date(input.value);
           var selectedDayOfWeek = selectedDate.getDay(); // 0 is Sunday, 1 is Monday, ..., 6 is Saturday
     
           // Allow only Monday dates
           if (selectedDayOfWeek !== 2) {
             alert('Sorry, We only Service your Area on WEDNESDAYS, Please select a Wednesday Date');
             input.value = ''; // Reset the input value
           }
         });

 }

 else if (inputValue == 85117
    || inputValue == 85118
    || inputValue == 85119
    || inputValue == 85120
    || inputValue == 85178
    || inputValue == 85354) {
        document.getElementById("morning").style.display = "block";
        document.getElementById("noon").style.display = "block";
        document.getElementById("afternoon").style.display = "block";
        document.getElementById("date-pick").style.display = "block";
        document.getElementById("no-service").style.display = "none";
        document.getElementById("no-service-time").style.display = "none";
     
         var input = document.getElementById('date');
     
         input.addEventListener('input', function () {
           var selectedDate = new Date(input.value);
           var selectedDayOfWeek = selectedDate.getDay(); // 0 is Sunday, 1 is Monday, ..., 6 is Saturday
     
           // Allow only Monday dates
           if (selectedDayOfWeek == 0 || selectedDayOfWeek == 1 || selectedDayOfWeek == 3 || selectedDayOfWeek == 5 || selectedDayOfWeek == 6) {
             alert('Sorry, We only Service your Area on TUESDAYS AND THURSDAYS, Please select a Date within those days');
             input.value = ''; // Reset the input value
           }
         });

 }

 else if (inputValue == 85140
    || inputValue == 85142
    || inputValue == 85298
    || inputValue == 85140
    || inputValue == 85142
    || inputValue == 85143
    || inputValue == 85248
    || inputValue == 85249) {
        document.getElementById("morning").style.display = "block";
        document.getElementById("noon").style.display = "block";
        document.getElementById("afternoon").style.display = "block";
        document.getElementById("date-pick").style.display = "block";
        document.getElementById("no-service").style.display = "none";
        document.getElementById("no-service-time").style.display = "none";
     
         var input = document.getElementById('date');
     
         input.addEventListener('input', function () {
           var selectedDate = new Date(input.value);
           var selectedDayOfWeek = selectedDate.getDay(); // 0 is Sunday, 1 is Monday, ..., 6 is Saturday
     
           // Allow only Monday dates
           if (selectedDayOfWeek == 2 || selectedDayOfWeek == 3 || selectedDayOfWeek == 6 || selectedDayOfWeek == 0) {
             alert('Sorry, We only Service your Area on MONDAYS, THURSDAYS AND FRIDAYS, Please select a Date within those days');
             input.value = ''; // Reset the input value
           }
         });

 }


 else if (inputValue == 85323
    || inputValue == 85329
    || inputValue == 85338
    || inputValue == 85339
    || inputValue == 85340
    || inputValue == 85353
    || inputValue == 85392
    || inputValue == 85326
    || inputValue == 85340
    || inputValue == 85343
    || inputValue == 85361
    || inputValue == 85396
    || inputValue == 85224
    || inputValue == 85225
    || inputValue == 85226
    || inputValue == 85244
    || inputValue == 85246
    || inputValue == 85248
    || inputValue == 85249
    || inputValue == 85286
    || inputValue == 85127
    || inputValue == 85142
    || inputValue == 85307
    || inputValue == 85335
    || inputValue == 85351
    || inputValue == 85233
    || inputValue == 85234
    || inputValue == 85295
    || inputValue == 85296
    || inputValue == 85297
    || inputValue == 85298
    || inputValue == 85299
    || inputValue == 85301
    || inputValue == 85302
    || inputValue == 85303
    || inputValue == 85304
    || inputValue == 85305
    || inputValue == 85306
    || inputValue == 85307
    || inputValue == 85308
    || inputValue == 85309
    || inputValue == 85310
    || inputValue == 85311
    || inputValue == 85312
    || inputValue == 85318
    || inputValue == 85326
    || inputValue == 85338
    || inputValue == 85340
    || inputValue == 85395
    || inputValue == 85236
    || inputValue == 85339
    || inputValue == 85041
    || inputValue == 85340
    || inputValue == 85201
    || inputValue == 85202
    || inputValue == 85203
    || inputValue == 85204
    || inputValue == 85205
    || inputValue == 85206
    || inputValue == 85207
    || inputValue == 85208
    || inputValue == 85209
    || inputValue == 85210
    || inputValue == 85211
    || inputValue == 85212
    || inputValue == 85213
    || inputValue == 85214
    || inputValue == 85215
    || inputValue == 85216
    || inputValue == 85274
    || inputValue == 85275
    || inputValue == 85277
    || inputValue == 85250
    || inputValue == 85253
    || inputValue == 85345
    || inputValue == 85380
    || inputValue == 85381
    || inputValue == 85382
    || inputValue == 85383
    || inputValue == 85385
    || inputValue == 85001
    || inputValue == 85002
    || inputValue == 85003
    || inputValue == 85004
    || inputValue == 85005
    || inputValue == 85006
    || inputValue == 85007
    || inputValue == 85008
    || inputValue == 85009
    || inputValue == 85010
    || inputValue == 85011
    || inputValue == 85012
    || inputValue == 85013
    || inputValue == 85014
    || inputValue == 85015
    || inputValue == 85016
    || inputValue == 85017
    || inputValue == 85018
    || inputValue == 85019
    || inputValue == 85020
    || inputValue == 85021
    || inputValue == 85022
    || inputValue == 85023
    || inputValue == 85024
    || inputValue == 85025
    || inputValue == 85026
    || inputValue == 85027
    || inputValue == 85028
    || inputValue == 85029
    || inputValue == 85030
    || inputValue == 85031
    || inputValue == 85032
    || inputValue == 85033
    || inputValue == 85034
    || inputValue == 85035
    || inputValue == 85036
    || inputValue == 85037
    || inputValue == 85038
    || inputValue == 85039
    || inputValue == 85040
    || inputValue == 85041
    || inputValue == 85042
    || inputValue == 85043
    || inputValue == 85044
    || inputValue == 85045
    || inputValue == 85046
    || inputValue == 85047
    || inputValue == 85048
    || inputValue == 85049
    || inputValue == 85050
    || inputValue == 85051
    || inputValue == 85052
    || inputValue == 85053
    || inputValue == 85054
    || inputValue == 85060
    || inputValue == 85061
    || inputValue == 85062
    || inputValue == 85063
    || inputValue == 85064
    || inputValue == 85065
    || inputValue == 85066
    || inputValue == 85067
    || inputValue == 85068
    || inputValue == 85069
    || inputValue == 85070
    || inputValue == 85071
    || inputValue == 85072
    || inputValue == 85073
    || inputValue == 85074
    || inputValue == 85075
    || inputValue == 85076
    || inputValue == 85077
    || inputValue == 85078
    || inputValue == 85079
    || inputValue == 85080
    || inputValue == 85082
    || inputValue == 85083
    || inputValue == 85085
    || inputValue == 85086
    || inputValue == 85087
    || inputValue == 85250
    || inputValue == 85251
    || inputValue == 85252
    || inputValue == 85253
    || inputValue == 85254
    || inputValue == 85255
    || inputValue == 85256
    || inputValue == 85257
    || inputValue == 85258
    || inputValue == 85259
    || inputValue == 85260
    || inputValue == 85261
    || inputValue == 85262
    || inputValue == 85263
    || inputValue == 85264
    || inputValue == 85266
    || inputValue == 85267
    || inputValue == 85268
    || inputValue == 85269
    || inputValue == 85271
    || inputValue == 85345
    || inputValue == 85351
    || inputValue == 85372
    || inputValue == 85373
    || inputValue == 85378
    || inputValue == 85375
    || inputValue == 85376
    || inputValue == 85378
    || inputValue == 85335
    || inputValue == 85355
    || inputValue == 85361
    || inputValue == 85374
    || inputValue == 85378
    || inputValue == 85379
    || inputValue == 85387
    || inputValue == 85388
    || inputValue == 85396
    || inputValue == 85280
    || inputValue == 85281
    || inputValue == 85282
    || inputValue == 85283
    || inputValue == 85284
    || inputValue == 85285
    || inputValue == 85287
    || inputValue == 85307
    || inputValue == 85353
    || inputValue == 85355
    || inputValue == 85363) {
        document.getElementById("morning").style.display = "block";
        document.getElementById("noon").style.display = "block";
        document.getElementById("afternoon").style.display = "block";
        document.getElementById("date-pick").style.display = "block";
        document.getElementById("no-service").style.display = "none";
        document.getElementById("no-service-time").style.display = "none";
     
         var input = document.getElementById('date');
     
         input.addEventListener('input', function () {
           var selectedDate = new Date(input.value);
           var selectedDayOfWeek = selectedDate.getDay(); // 0 is Sunday, 1 is Monday, ..., 6 is Saturday
     
           // Allow only Monday dates
           if (selectedDayOfWeek == 2 || selectedDayOfWeek == 3 || selectedDayOfWeek == 5 || selectedDayOfWeek == 0) {
             alert('Sorry, We only Service your Area on MONDAYS, THURSDAYS AND SATURDAYS, Please select a Date within those days');
             input.value = ''; // Reset the input value
           }
         });

 }

 else {
    document.getElementById("morning").style.display = "none";
    document.getElementById("noon").style.display = "none";
    document.getElementById("afternoon").style.display = "none";
    document.getElementById("date-pick").style.display = "none";
    document.getElementById("no-service").style.display = "block";
    document.getElementById("no-service-time").style.display = "block";
  }
}

