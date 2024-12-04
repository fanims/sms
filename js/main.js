// Custom JavaScript for additional functionality
$(document).ready(function() {
    // Handle sidebar navigation
    $('.sidebar-link').on('click', function(e) {
        e.preventDefault();
        
        // Get the target from href instead of data-bs-target
        const target = $(this).attr('href');
        
        // Update active state in sidebar
        $('.sidebar-link').removeClass('active');
        $(this).addClass('active');
        
        // Show corresponding content
        $('.tab-pane').removeClass('show active');
        $(target).addClass('show active');
        
        // Store active tab in localStorage
        localStorage.setItem('activeTab', target);
        
        // On mobile, close sidebar after selection
        if ($(window).width() <= 768) {
            $('#sidebar, #main-content').removeClass('active');
        }
    });

    // Restore last active tab
    const activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
        $(`.sidebar-link[href="${activeTab}"]`).click();
    } else {
        // Set default active tab if none stored
        $('.sidebar-link:first').click();
    }
});

$(document).ready(function() {
    $('.fee-input').on('input', function() {
        let total = 0;
        $('.fee-input').each(function() {
            const value = parseFloat($(this).val()) || 0;
            total += value;
        });
        $('#totalFee').val(total.toFixed(2));
    });

    $('form').on('submit', function(e) {
        e.preventDefault();
        
        const totalFee = parseFloat($('#totalFee').val()) || 0;
        const amountPaid = parseFloat($('input[type="number"]:last').val()) || 0;
        
        if (amountPaid > totalFee) {
            alert('Amount paid cannot be greater than total fee');
            return false;
        }

        // if (this.checkValidity()) {
        //     alert('Student registered successfully!');
        // } else {
        //     this.reportValidity();
        // }
    });
});

// $(document).ready(function() {
//     $('#addFees .fee-input').on('input', function() {
//         let total = 0;
//         $('#addFees .fee-input').each(function() {
//             const value = parseFloat($(this).val()) || 0;
//             total += value;
//         });
//         $('#totalFeePayment').val(total.toFixed(2));
//     });

//     $('#studentRollNo').on('change', function() {
//         if ($(this).val()) {
//             $('#studentName').val('John Doe');
//             $('#studentClass').val('Class X-A');
//         } else {
//             $('#studentName').val('');
//             $('#studentClass').val('');
//         }
//     });
// });