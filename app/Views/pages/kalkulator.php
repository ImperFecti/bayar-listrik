<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="calclistrik">
    <form id="formlistrik">
        <div class="mb-3">
            <label for="dailyusage" class="form-label">Pemakaian Harian (watt)</label>
            <input type="number" class="form-control" name="dailyusage" id="dailyusage" min="1" required />
        </div>
        <div class="mb-3">
            <label for="gol-listrik" class="form-label">Golongan Listrik</label>
            <select class="form-select form-select-lg" name="gol-listrik" id="gol-listrik" required>
                <option selected>Select one</option>
                <option value="750">R2/450VA</option>
                <option value="">Istanbul</option>
                <option value="">Jakarta</option>
            </select>
        </div>
    </form>
</div>

<script>
</script>
<?= $this->endSection(); ?>