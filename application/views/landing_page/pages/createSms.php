<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Send SMS to Multiple Numbers</h4>
    </div>
    <div class="card-body">
      <form id="smsForm">
        <!-- Numbers -->
        <div class="mb-3">
          <label for="numbers" class="form-label">Phone Numbers</label>
          <textarea 
            class="form-control" 
            id="numbers" 
            name="numbers" 
            rows="3" 
            placeholder="Enter numbers separated by commas, e.g. 9876543210,9876543211" 
            required></textarea>
          <small class="text-muted">Separate multiple numbers with commas.</small>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">
          <i class="bi bi-send-fill"></i> Send SMS
        </button>
      </form>
    </div>
  </div>
</div>

<script>
  $("#smsForm").on("submit", function(e) {
    e.preventDefault();

    const numbers = $("#numbers").val();
    $.ajax({
      url: "<?= base_url(); ?>send-fake-sms",   // 🔹 your backend URL
      type: "POST",
      dataType: "json",
      data: {
        _token: '<?php echo $this->security->get_csrf_hash(); ?>',
        numbers: numbers,
      },
      success: function(response) {
        alert("✅ SMS Sent Successfully!");
      },
      error: function(xhr, status, error) {
        alert("❌ Error sending SMS!");
        console.error(error);
      }
    });
  });
</script>
