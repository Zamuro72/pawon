<form>
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Your Name">
                <label for="name">Nama Lu</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Your Email">
                <label for="email">Email Lu</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating date" id="date3" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                <label for="datetime">Tanggal & Waktu</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select" id="select1">
                    <option value="1">Sendiri</option>
                    <option value="2">Dua Orang</option>
                    <option value="3">Tiga Orang</option>
                </select>
                <label for="select1">Berapa Orang</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                <label for="message">Request Gimana?</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Pesen sekarang </button>
        </div>
    </div>
</form>