(function(e){"function"==typeof define&&define.amd?define(["jquery","moment"],e):e(jQuery,moment)})(function(e,a){function t(e){return e>1&&5>e}function n(e,a,n,r){var d=e+" ";switch(n){case"s":return a||r?"pár sekúnd":"pár sekundami";case"m":return a?"minúta":r?"minútu":"minútou";case"mm":return a||r?d+(t(e)?"minúty":"minút"):d+"minútami";case"h":return a?"hodina":r?"hodinu":"hodinou";case"hh":return a||r?d+(t(e)?"hodiny":"hodín"):d+"hodinami";case"d":return a||r?"deň":"dňom";case"dd":return a||r?d+(t(e)?"dni":"dní"):d+"dňami";case"M":return a||r?"mesiac":"mesiacom";case"MM":return a||r?d+(t(e)?"mesiace":"mesiacov"):d+"mesiacmi";case"y":return a||r?"rok":"rokom";case"yy":return a||r?d+(t(e)?"roky":"rokov"):d+"rokmi"}}var r="január_február_marec_apríl_máj_jún_júl_august_september_október_november_december".split("_"),d="jan_feb_mar_apr_máj_jún_júl_aug_sep_okt_nov_dec".split("_");(a.defineLocale||a.lang).call(a,"sk",{months:r,monthsShort:d,monthsParse:function(e,a){var t,n=[];for(t=0;12>t;t++)n[t]=RegExp("^"+e[t]+"$|^"+a[t]+"$","i");return n}(r,d),weekdays:"nedeľa_pondelok_utorok_streda_štvrtok_piatok_sobota".split("_"),weekdaysShort:"ne_po_ut_st_št_pi_so".split("_"),weekdaysMin:"ne_po_ut_st_št_pi_so".split("_"),longDateFormat:{LT:"H:mm",L:"DD.MM.YYYY",LL:"D. MMMM YYYY",LLL:"D. MMMM YYYY LT",LLLL:"dddd D. MMMM YYYY LT"},calendar:{sameDay:"[dnes o] LT",nextDay:"[zajtra o] LT",nextWeek:function(){switch(this.day()){case 0:return"[v nedeľu o] LT";case 1:case 2:return"[v] dddd [o] LT";case 3:return"[v stredu o] LT";case 4:return"[vo štvrtok o] LT";case 5:return"[v piatok o] LT";case 6:return"[v sobotu o] LT"}},lastDay:"[včera o] LT",lastWeek:function(){switch(this.day()){case 0:return"[minulú nedeľu o] LT";case 1:case 2:return"[minulý] dddd [o] LT";case 3:return"[minulú stredu o] LT";case 4:case 5:return"[minulý] dddd [o] LT";case 6:return"[minulú sobotu o] LT"}},sameElse:"L"},relativeTime:{future:"za %s",past:"pred %s",s:n,m:n,mm:n,h:n,hh:n,d:n,dd:n,M:n,MM:n,y:n,yy:n},ordinal:"%d.",week:{dow:1,doy:4}}),e.fullCalendar.datepickerLang("sk","sk",{closeText:"Zavrieť",prevText:"&#x3C;Predchádzajúci",nextText:"Nasledujúci&#x3E;",currentText:"Dnes",monthNames:["január","február","marec","apríl","máj","jún","júl","august","september","október","november","december"],monthNamesShort:["Jan","Feb","Mar","Apr","Máj","Jún","Júl","Aug","Sep","Okt","Nov","Dec"],dayNames:["nedeľa","pondelok","utorok","streda","štvrtok","piatok","sobota"],dayNamesShort:["Ned","Pon","Uto","Str","Štv","Pia","Sob"],dayNamesMin:["Ne","Po","Ut","St","Št","Pia","So"],weekHeader:"Ty",dateFormat:"dd.mm.yy",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:""}),e.fullCalendar.lang("sk",{defaultButtonText:{month:"Mesiac",week:"Týždeň",day:"Deň",list:"Rozvrh"},allDayText:"Celý deň",eventLimitText:function(e){return"+ďalšie: "+e}})});