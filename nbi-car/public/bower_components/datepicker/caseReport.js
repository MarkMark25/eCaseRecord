        $('#moreButton').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var caseid = button.data('caseid')
            var ccn = button.data('ccn')
            var docketnumber = button.data('docketnumber')
            var acmo = button.data('acmo')
            var dateTerminated = button.data('date_terminated')
            var dateassigned = button.data('dateassigned')
            var full_name = button.data('full_name')
            var status = button.data('status')
            var complainantname = button.data('complainantname')
            var complainant_address = button.data('complainant_address')
            var complainant_number = button.data('complainant_number')
            var suspect_name= button.data('suspect_name')
            var suspect_address= button.data('suspect_address')
            var suspect_number= button.data('suspect_number')
            var suspect_sex= button.data('suspect_sex')
            var suspect_age= button.data('suspect_age')
            var suspect_status= button.data('suspect_status')
            var suspect_occupation= button.data('suspect_occupation')
            var natureName = button.data('nature_name')
            var place= button.data('place')
            var when_committed= button.data('when_committed')
            var victim_name= button.data('victim_name')
            var victim_address= button.data('victim_address')
            var victim_number= button.data('victim_number')
            var victim_sex= button.data('victim_sex')
            var victim_age= button.data('victim_age')
            var victim_status= button.data('victim_status')
            var victim_occupation= button.data('victim_occupation')
            var narration_facts= button.data('narration_facts')
            var matter= button.data('matter')
            var investigation= button.data('investigation')
            var complained= button.data('complained')
            var consideration= button.data('consideration')

            var modal = $(this)
            modal.find('.modal-body #caseid').val(caseid)
            modal.find('.modal-body #ccn').val(ccn)
            modal.find('.modal-body #docketnumber').val(docketnumber)
            modal.find('.modal-body #acmo').val(acmo)
            modal.find('.modal-body #dateTerminated').val(dateTerminated)
            modal.find('.modal-body #dateassigned').val(dateassigned)
            modal.find('.modal-body #full_name').val(full_name)
            modal.find('.modal-body #status').val(status)
            modal.find('.modal-body #complainant').val(complainantname)
            modal.find('.modal-body #complainantAddress').val(complainant_address)
            modal.find('.modal-body #complainantTelNumber').val(complainant_number)
            modal.find('.modal-body #suspectNameA').val(suspect_name)
            modal.find('.modal-body #suspectAddressA').val(suspect_address)
            modal.find('.modal-body #suspectTelNumberA').val(suspect_number)
            modal.find('.modal-body #suspectSexA').val(suspect_sex)
            modal.find('.modal-body #suspectAgeA').val(suspect_age)
            modal.find('.modal-body #suspectCivilStatusA').val(suspect_status)
            modal.find('.modal-body #suspectOccupationA').val(suspect_occupation)
            modal.find('.modal-body #nameOfNature').val(natureName)
            modal.find('.modal-body #whereCommitted').val(place)
            modal.find('.modal-body #wheneCommitted').val(when_committed)
            modal.find('.modal-body #victimNameA').val(victim_name)
            modal.find('.modal-body #victimAddressA').val(victim_address)
            modal.find('.modal-body #victimTelNumberA').val(victim_number)
            modal.find('.modal-body #victimSexA').val(victim_sex)
            modal.find('.modal-body #victimAgeA').val(victim_age)
            modal.find('.modal-body #victimCivilStatusA').val(victim_status)
            modal.find('.modal-body #victimOccupationA').val(victim_occupation)
            modal.find('.modal-body #narrationOfFacts').val(narration_facts)
            modal.find('.modal-body #hasTheMatter').val(matter)
            modal.find('.modal-body #statusOfInvestigation').val(investigation)
            modal.find('.modal-body #isTheMatterComplained').val(complained)
            modal.find('.modal-body #whatConsidirations').val(consideration)
          })
          $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var caseid = button.data('caseid')
            var ccn = button.data('ccn')
            var docketnumber = button.data('docketnumber')
            var acmo = button.data('acmo')
            var dateTerminated = button.data('date_terminated')
            var dateassigned = button.data('dateassigned')
            var full_name = button.data('full_name')
            var status = button.data('status')
            var complainantname = button.data('complainantname')
            var complainant_address = button.data('complainant_address')
            var complainant_number = button.data('complainant_number')
            var suspect_name= button.data('suspect_name')
            var suspect_address= button.data('suspect_address')
            var suspect_number= button.data('suspect_number')
            var suspect_sex= button.data('suspect_sex')
            var suspect_age= button.data('suspect_age')
            var suspect_status= button.data('suspect_status')
            var suspect_occupation= button.data('suspect_occupation')
            var natureName = button.data('nature_name')
            var place= button.data('place')
            var when_committed= button.data('when_committed')
            var victim_name= button.data('victim_name')
            var victim_address= button.data('victim_address')
            var victim_number= button.data('victim_number')
            var victim_sex= button.data('victim_sex')
            var victim_age= button.data('victim_age')
            var victim_status= button.data('victim_status')
            var victim_occupation= button.data('victim_occupation')
            var narration_facts= button.data('narration_facts')
            var matter= button.data('matter')
            var investigation= button.data('investigation')
            var complained= button.data('complained')
            var consideration= button.data('consideration')

            var modal = $(this)
            modal.find('.modal-body #caseid').val(caseid)
            modal.find('.modal-body #ccn').val(ccn)
            modal.find('.modal-body #docketnumber').val(docketnumber)
            modal.find('.modal-body #acmo').val(acmo)
            modal.find('.modal-body #dateTerminated').val(dateTerminated)
            modal.find('.modal-body #dateassigned').val(dateassigned)
            modal.find('.modal-body #full_name').val(full_name)
            modal.find('.modal-body #status').val(status)
            modal.find('.modal-body #complainant').val(complainantname)
            modal.find('.modal-body #complainantAddress').val(complainant_address)
            modal.find('.modal-body #complainantTelNumber').val(complainant_number)
            modal.find('.modal-body #suspectNameA').val(suspect_name)
            modal.find('.modal-body #suspectAddressA').val(suspect_address)
            modal.find('.modal-body #suspectTelNumberA').val(suspect_number)
            modal.find('.modal-body #suspectSexA').val(suspect_sex)
            modal.find('.modal-body #suspectAgeA').val(suspect_age)
            modal.find('.modal-body #suspectCivilStatusA').val(suspect_status)
            modal.find('.modal-body #suspectOccupationA').val(suspect_occupation)
            modal.find('.modal-body #nameOfNature').val(natureName)
            modal.find('.modal-body #whereCommitted').val(place)
            modal.find('.modal-body #wheneCommitted').val(when_committed)
            modal.find('.modal-body #victimNameA').val(victim_name)
            modal.find('.modal-body #victimAddressA').val(victim_address)
            modal.find('.modal-body #victimTelNumberA').val(victim_number)
            modal.find('.modal-body #victimSexA').val(victim_sex)
            modal.find('.modal-body #victimAgeA').val(victim_age)
            modal.find('.modal-body #victimCivilStatusA').val(victim_status)
            modal.find('.modal-body #victimOccupationA').val(victim_occupation)
            modal.find('.modal-body #narrationOfFacts').val(narration_facts)
            modal.find('.modal-body #hasTheMatter').val(matter)
            modal.find('.modal-body #statusOfInvestigation').val(investigation)
            modal.find('.modal-body #isTheMatterComplained').val(complained)
            modal.find('.modal-body #whatConsidirations').val(consideration)
          })
