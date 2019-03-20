<div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
                <label for="ccn">Nature</label>
                <div class="input-group mb-2">
                    <input type="text" id="nature" name= "nature" autocomplete="off" class="form-control" readonly> {{-- QUERY HERE --}}
                </div>
            </div>
            <div class="col-md-6">
                <label for="role">Case Type</label>
                <select name="casetype" id="casetype" class="form-control" readonly>
                    <option value="Crime">Crime</option>
                    <option value="Miscellaneous">Miscellaneous</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-12">
                <label for="">Description</label>
                <textarea class="form-control" name="description" id="description" style="width:100%;font-size:15px;resize:none;" rows="5" readonly></textarea>{{-- QUERY HERE --}}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-row">
            <div class="col-md-12">
                <div class="">
                    <input type="hidden" id="natureAvailability" name="natureAvailability" class="form-control" value="Delete">
                    <input type="hidden" id="descriptionOne" name="descriptionOne" class="form-control" value="Administrator delete case nature">
                    <input type="hidden" id="action" name="action" class="form-control" value="Delete"> {{-- QUERY HERE --}}
                    <input type="hidden" name="userid" id="userid" value="{{ Auth::user()->userid }}">
                </div>
            </div>
        </div>
    </div>
