(()=>{(function(){"use strict";$(".datepicker").each(function(){let e={autoApply:!1,singleMode:!1,numberOfColumns:2,numberOfMonths:2,showWeekNumbers:!0,format:"D MMM, YYYY",dropdowns:{minYear:1990,maxYear:null,months:!0,years:!0}};if($(this).data("single-mode")&&(e.singleMode=!0,e.numberOfColumns=1,e.numberOfMonths=1),$(this).data("format")&&(e.format=$(this).data("format")),!$(this).val()){let t=dayjs().format(e.format);t+=e.singleMode?"":" - "+dayjs().add(1,"month").format(e.format),$(this).val(t)}new Litepicker({element:this,...e})})})();})();