<form action="/dashboard/update/siyalems/{{ $dataPegawai->id }}" method="post">
    @csrf

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="lembaga">Lembaga
            (Adegan)</label>
        <select class="form-select" id="basic-form-gender" name="lembaga" aria-label="Default select example">
            <option selected disabled>--Pilih Lembaga--</option>
            <option value="Kuat" {{ $dataPegawai->siyalem->lembaga === 'Kuat' ? 'selected' : '' }}>
                Kuat
            </option>
            <option value="Tegak" {{ $dataPegawai->siyalem->lembaga === 'Tegak' ? 'selected' : '' }}>
                Tegak
            </option>
            <option value="Lempai" {{ $dataPegawai->siyalem->lembaga === 'Lempai' ? 'selected' : '' }}>
                Lempai
            </option>
            <option value="Lemah" {{ $dataPegawai->siyalem->lembaga === 'Lemah' ? 'selected' : '' }}>
                Lemah
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="sikap">Sikap</label>
        <select class="form-select" id="basic-form-gender" name="sikap" aria-label="Default select example">
            <option selected disabled>--Pilih Sikap--</option>
            <option value="Tegak" {{ $dataPegawai->siyalem->sikap === 'Tegak' ? 'selected' : '' }}>
                Tegak
            </option>
            <option value="Gagah" {{ $dataPegawai->siyalem->sikap === 'Gagah' ? 'selected' : '' }}>
                Gagah
            </option>
            <option value="Bungkok" {{ $dataPegawai->siyalem->sikap === 'Bungkok' ? 'selected' : '' }}>
                Bungkok
            </option>
            <option value="Kepal Tunduk Kaku"
                {{ $dataPegawai->siyalem->sikap === 'Kepal Tunduk Kaku' ? 'selected' : '' }}>
                Kepal Tunduk Kaku
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label" for="basic-form-gender">langkah</label>
        <select class="form-select" id="basic-form-gender" name="langkah" aria-label="Default select example">
            <option selected disabled>--Pilih Langkah--</option>
            <option value="Lenting" {{ $dataPegawai->siyalem->langkah === 'Lenting' ? 'selected' : '' }}>
                Lenting
            </option>
            <option value="Tenang" {{ $dataPegawai->siyalem->langkah === 'Tenang' ? 'selected' : '' }}>
                Tenang
            </option>
            <option value="Langkah Panjang"
                {{ $dataPegawai->siyalem->langkah === 'Langkah Panjang' ? 'selected' : '' }}>
                Langkah Panjang
            </option>
            <option value="Langkah Pendek" {{ $dataPegawai->siyalem->langkah === 'Langkah Pendek' ? 'selected' : '' }}>
                Langkah Pendek
            </option>
        </select>
        @error('langkah')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="bangun_kepala">Bangun
            Kepala</label>
        <select class="form-select" id="basic-form-gender" name="bangun_kepala" aria-label="Default select example">
            <option selected disabled>--Pilih Bangun Kepala--
            </option>
            <option value="Sebagai Pangkal"
                {{ $dataPegawai->siyalem->bangun_kepala === 'Sebagai Pangkal' ? 'selected' : '' }}>
                Sebagai Pangkal
            </option>
            <option value="Belah Ketupat"
                {{ $dataPegawai->siyalem->bangun_kepala === 'Belah Ketupat' ? 'selected' : '' }}>
                Belah Ketupat
            </option>
            <option value="Bulat" {{ $dataPegawai->siyalem->bangun_kepala === 'Bulat' ? 'selected' : '' }}>
                Bulat
            </option>
            <option value="Lonjong" {{ $dataPegawai->siyalem->bangun_kepala === 'Lonjong' ? 'selected' : '' }}>
                Lonjong
            </option>
            <option value="Jorong" {{ $dataPegawai->siyalem->bangun_kepala === 'Jorong' ? 'selected' : '' }}>
                Jorong
            </option>
            <option value="Panjang" {{ $dataPegawai->siyalem->bangun_kepala === 'Panjang' ? 'selected' : '' }}>
                Panjang
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="rambut">Rambut</label>
        <select class="form-select" id="basic-form-gender" name="rambut" aria-label="Default select example">
            <option selected disabled>--Pilih Rambut--</option>
            <option value="Lebat/Jarang" {{ $dataPegawai->siyalem->rambut === 'Lebat/Jarang' ? 'selected' : '' }}>
                Lebat/Jarang
            </option>
            <option value="Berombak/Kejur" {{ $dataPegawai->siyalem->rambut === 'Berombak/Kejur' ? 'selected' : '' }}>
                Berombak/Kejur
            </option>
            <option value="Kejur/Keriting" {{ $dataPegawai->siyalem->rambut === 'Kejur/Keriting' ? 'selected' : '' }}>
                Kejur/Keriting
            </option>
            <option value="Tegak" {{ $dataPegawai->siyalem->rambut === 'Tegak' ? 'selected' : '' }}>
                Tegak
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="rambut">Rambut</label>
        <select class="form-select" id="basic-form-gender" name="rambut" aria-label="Default select example">
            <option selected disabled>--Pilih Rambut--</option>
            <option value="Lebat/Jarang" {{ $dataPegawai->siyalem->rambut === 'Lebat/Jarang' ? 'selected' : '' }}>
                Lebat/Jarang
            </option>
            <option value="Berombak/Kejur" {{ $dataPegawai->siyalem->rambut === 'Berombak/Kejur' ? 'selected' : '' }}>
                Berombak/Kejur
            </option>
            <option value="Kejur/Keriting" {{ $dataPegawai->siyalem->rambut === 'Kejur/Keriting' ? 'selected' : '' }}>
                Kejur/Keriting
            </option>
            <option value="Tegak" {{ $dataPegawai->siyalem->rambut === 'Tegak' ? 'selected' : '' }}>
                Tegak
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="kening">Kening</label>
        <select class="form-select" id="basic-form-gender" name="kening" aria-label="Default select example">
            <option selected disabled>--Pilih Kening--</option>
            <option value="Rata" {{ $dataPegawai->siyalem->kening === 'Rata' ? 'selected' : '' }}>
                Rata
            </option>
            <option value="Miring" {{ $dataPegawai->siyalem->kening === 'Miring' ? 'selected' : '' }}>
                Miring
            </option>
            <option value="Ke Atas/Ke Bawah"
                {{ $dataPegawai->siyalem->kening === 'Ke Atas/Ke Bawah' ? 'selected' : '' }}>
                Ke Atas/Ke Bawah
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="dahi">Dahi</label>
        <select class="form-select" id="basic-form-gender" name="dahi" aria-label="Default select example">
            <option selected disabled>--Pilih Dahi--</option>
            <option value="Loncos Ke Belakang/Lurus Kebawah"
                {{ $dataPegawai->siyalem->dahi === 'Loncos Ke Belakang/Lurus Kebawah' ? 'selected' : '' }}>
                Loncos Ke Belakang/Lurus Kebawah
            </option>
            <option value="Cenderung ke belakang"
                {{ $dataPegawai->siyalem->dahi === 'Cenderung ke belakang' ? 'selected' : '' }}>
                Cenderung ke belakang
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="hidung">Hidung</label>
        <select class="form-select" id="basic-form-gender" name="hidung" aria-label="Default select example">
            <option selected disabled>--Pilih Hidung--</option>
            <option value="Pangkalnya Rata"
                {{ $dataPegawai->siyalem->hidung === 'Pangkalnya Rata' ? 'selected' : '' }}>
                Pangkalnya Rata
            </option>
            <option value="Batangnya:Membentuk kedalam/keluar lurus, alasnya menuju ke atas"
                {{ $dataPegawai->siyalem->hidung === 'Batangnya:Membentuk kedalam/keluar lurus, alasnya menuju ke atas' ? 'selected' : '' }}>
                Batangnya:Membentuk kedalam/keluar lurus,
                alasnya menuju ke
                atas
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="bibir">Bibir</label>
        <select class="form-select" id="basic-form-gender" name="bibir" aria-label="Default select example">
            <option selected disabled>--Pilih Bibir--</option>
            <option value="Tebal" {{ $dataPegawai->siyalem->bibir === 'Tebal' ? 'selected' : '' }}>
                Tebal
            </option>
            <option value="Tipis" {{ $dataPegawai->siyalem->bibir === 'Tipis' ? 'selected' : '' }}>
                Tipis
            </option>
            <option value="Sumbing" {{ $dataPegawai->siyalem->bibir === 'Sumbing' ? 'selected' : '' }}>
                Sumbing
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="telinga">Telinga</label>
        <select class="form-select" id="basic-form-gender" name="telinga" aria-label="Default select example">
            <option selected disabled>--Pilih Telinga--</option>
            <option value="Bulat bujur tiga penjuru dari belakang"
                {{ $dataPegawai->siyalem->telinga === 'Bulat bujur tiga penjuru dari belakang' ? 'selected' : '' }}>
                Bulat bujur tiga penjuru dari belakang
            </option>
            <option value="Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang"
                {{ $dataPegawai->siyalem->telinga === 'Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang' ? 'selected' : '' }}>
                Berlengket dengan kepala dnegan kepala bagian
                atas mengenai
                kepala belakang
            </option>
            <option value="Lain-Lain" {{ $dataPegawai->siyalem->telinga === 'Lain-lain' ? 'selected' : '' }}>Lain-Lain
            </option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="urusan_polisi_militer">Urusan
            Polisi Militer</label>
        <select class="form-select" id="basic-form-gender" name="urusan_polisi_militer"
            aria-label="Default select example">
            <option selected disabled>--Pilih Urusan Polisi
                Militer--
            </option>
            <option value="Pernah" {{ $dataPegawai->siyalem->urusan_polisi_militer === 'Pernah' ? 'selected' : '' }}>
                Pernah
            </option>
            <option value="Tidak Pernah"
                {{ $dataPegawai->siyalem->urusan_polisi_militer === 'Tidak Pernah' ? 'selected' : '' }}>
                Tidak Pernah
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>
    <button class="btn btn-primary" type="submit">Edit
        Siyalemens
    </button>
</form>
