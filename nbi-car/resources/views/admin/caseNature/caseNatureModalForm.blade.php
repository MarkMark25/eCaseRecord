<div class="form-group">
    <div class="form-row">
        <div class="col-md-6">
            <label for="ccn">Nature</label>
            <div class="input-group mb-2">
                <input type="text" id="nature" name= "nature" autocomplete="off" class="form-control"> {{-- QUERY HERE --}}
            </div>
        </div>
        <div class="col-md-6">
            <label for="role">Republic Act</label>
            <div class="input-group mb-2">
                <input type="text" id="republicAct" name= "republicAct" autocomplete="off" class="form-control"> {{-- QUERY HERE --}}
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="form-row">
        <div class="col-md-12">
            <label for="">Description</label>
            <textarea class="form-control" autocomplete="off" name="description" id="description" style="width:100%;font-size:15px;resize:none;" rows="5"></textarea>{{-- QUERY HERE --}}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="form-row">
        <div class="col-md-12">
            <div class="">
                <input type="hidden" id="descriptionOne" name="descriptionOne" class="form-control" value="Administrator update case nature details with nature id = ">
                <input type="hidden" id="action" name="action" class="form-control" value="Update"> {{-- QUERY HERE --}}
                <input type="hidden" name="userid" id="userid" value="{{ Auth::user()->userid }}">
            </div>
        </div>
    </div>
</div>
