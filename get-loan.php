<?php
// Simple Get Loan page placeholder
include 'includes/header.php';
?>
		<link rel="stylesheet" type="text/css" href="assets/css/consistent-padding.css">
		<link rel="stylesheet" type="text/css" href="assets/css/color-theme.css">
<style>
body {
    background: linear-gradient(135deg, #121212 0%, #1a1a1a 25%, #2193b0 75%, #6dd5ed 100%);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}

/* Ensure footer is not affected by page styles */
.footer-section {
    background: linear-gradient(135deg, #121212 0%, #1a1a1a 25%, #2193b0 75%, #6dd5ed 100%) !important;
    margin-top: 0 !important;
    padding-top: 0 !important;
}

.loan-form-section {
    margin-top: 110px;
    margin-bottom: 40px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: calc(100vh - 110px);
}

.loan-form-card {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3), 0 2px 8px rgba(0, 0, 0, 0.2);
    padding: 3rem 2.5rem;
    max-width: 800px;
    width: 100%;
    border: 1px solid rgba(255, 255, 255, 0.15);
    position: relative;
    overflow: hidden;
}

.loan-form-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
    border-radius: 20px;
    z-index: -1;
}

.loan-form-card h2 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 1.5rem;
    text-align: center;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.loan-form-section-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: #ffffff;
    margin-top: 2rem;
    margin-bottom: 0.8rem;
    letter-spacing: 0.5px;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
}

.loan-form-label {
    font-weight: 500;
    color: #ffffff;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    margin-bottom: 0.5rem;
    display: block;
}

.loan-form-input, .loan-form-select, .loan-form-textarea {
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 0.7rem 1rem;
    font-size: 1rem;
    margin-bottom: 1rem;
    width: 100%;
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    box-sizing: border-box;
}

.loan-form-input::placeholder, .loan-form-textarea::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.loan-form-input:focus, .loan-form-select:focus, .loan-form-textarea:focus {
    border-color: rgba(255, 255, 255, 0.8);
    outline: none;
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
}

.loan-form-radio-group {
    display: flex;
    gap: 2rem;
    margin-bottom: 1rem;
    flex-wrap: wrap;
}

.loan-form-radio-label {
    font-weight: 400;
    margin-right: 1.5rem;
    color: #ffffff;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.loan-form-radio-label input[type="radio"] {
    margin: 0;
}

.loan-form-declaration {
    font-size: 0.98rem;
    color: #ffffff;
    margin-bottom: 1.2rem;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    line-height: 1.6;
}

.loan-form-signature-row {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1.2rem;
}

.loan-form-signature-row .form-group {
    flex: 1;
}

.loan-form-section hr {
    margin: 2rem 0 1.5rem 0;
    border-top: 1.5px solid rgba(255, 255, 255, 0.2);
}

.loan-form-official {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 1.5rem 1.2rem;
    margin-top: 2.5rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
}

.form-section {
    display: none;
}

.form-section.active {
    display: block;
}

.navigation-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 2rem;
    gap: 1rem;
}

.nav-btn {
    background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
    color: #fff;
    border: none;
    padding: 0.8rem 2rem;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    text-align: center;
}

.nav-btn:hover {
    background: linear-gradient(135deg, #6dd5ed 0%, #2193b0 100%);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(33, 147, 176, 0.3);
    text-decoration: none;
    color: #fff;
}

.nav-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    transform: none;
}

.progress-indicator {
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
    gap: 1rem;
}

.progress-step {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
}

.progress-step.active {
    background: #6dd5ed;
    box-shadow: 0 0 10px rgba(109, 213, 237, 0.5);
}

@media (max-width: 600px) {
    .loan-form-card {
        padding: 2rem 1.5rem;
        margin: 10px;
    }
    .loan-form-signature-row {
        flex-direction: column;
        gap: 0.5rem;
    }
    .loan-form-section {
        padding: 10px;
    }
    .navigation-buttons {
        flex-direction: column;
    }
    .nav-btn {
        width: 100%;
    }
}
</style>

<div class="container loan-form-section">
    <div class="loan-form-card">
        <h2>OSIAGA FOUNDATION MICRO CREDIT SCHEME <br><span style="font-size:1.1rem;font-weight:400;">(INTEREST-FREE) Application Form</span></h2>
        
        <!-- Progress Indicator -->
        <div class="progress-indicator">
            <div class="progress-step active" id="step-1"></div>
            <div class="progress-step" id="step-2"></div>
            <div class="progress-step" id="step-3"></div>
            <div class="progress-step" id="step-4"></div>
        </div>
        
        <form>
            <!-- SECTION A: PERSONAL INFORMATION -->
            <div class="form-section active" id="section-a">
                <div class="loan-form-section-title">SECTION A: PERSONAL INFORMATION</div>
                <div class="form-group">
                    <label class="loan-form-label">1. Full Name</label>
                    <input type="text" class="loan-form-input" name="fullname" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">2. Gender</label>
                    <div class="loan-form-radio-group">
                        <label class="loan-form-radio-label"><input type="radio" name="gender" value="Male" required> Male</label>
                        <label class="loan-form-radio-label"><input type="radio" name="gender" value="Female"> Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">3. Date of Birth</label>
                    <input type="date" class="loan-form-input" name="dob" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">4. Phone Number</label>
                    <input type="tel" class="loan-form-input" name="phone" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">5. Email Address (if any)</label>
                    <input type="email" class="loan-form-input" name="email">
                </div>
                <div class="form-group">
                    <label class="loan-form-label">6. Home Address</label>
                    <input type="text" class="loan-form-input" name="home_address" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">7. State of Origin</label>
                    <input type="text" class="loan-form-input" name="state_of_origin" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">8. Marital Status</label>
                    <div class="loan-form-radio-group">
                        <label class="loan-form-radio-label"><input type="radio" name="marital_status" value="Single" required> Single</label>
                        <label class="loan-form-radio-label"><input type="radio" name="marital_status" value="Married"> Married</label>
                        <label class="loan-form-radio-label"><input type="radio" name="marital_status" value="Widow"> Widow</label>
                        <label class="loan-form-radio-label"><input type="radio" name="marital_status" value="Divorced"> Divorced</label>
                    </div>
                </div>
                <div class="navigation-buttons">
                    <div></div>
                    <button type="button" class="nav-btn" onclick="nextSection('section-a', 'section-b')">Next →</button>
                </div>
            </div>
            
            <!-- SECTION B: BUSINESS INFORMATION -->
            <div class="form-section" id="section-b">
                <div class="loan-form-section-title">SECTION B: BUSINESS INFORMATION</div>
                <div class="form-group">
                    <label class="loan-form-label">9. Business Name (if any)</label>
                    <input type="text" class="loan-form-input" name="business_name">
                </div>
                <div class="form-group">
                    <label class="loan-form-label">10. Type of Business</label>
                    <input type="text" class="loan-form-input" name="business_type">
                </div>
                <div class="form-group">
                    <label class="loan-form-label">11. Business Address (if different)</label>
                    <input type="text" class="loan-form-input" name="business_address">
                </div>
                <div class="form-group">
                    <label class="loan-form-label">12. How long have you been in business?</label>
                    <input type="text" class="loan-form-input" name="business_duration">
                </div>
                <div class="form-group">
                    <label class="loan-form-label">13. What do you need the loan for? (Briefly describe)</label>
                    <textarea class="loan-form-textarea" name="loan_purpose" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">14. How much are you requesting? (NGN)</label>
                    <input type="number" class="loan-form-input" name="amount_requested" min="0" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">15. How do you intend to repay? (e.g., Weekly, Monthly)</label>
                    <input type="text" class="loan-form-input" name="repayment_plan" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">16. Do you have any previous loan experience?</label>
                    <div class="loan-form-radio-group">
                        <label class="loan-form-radio-label"><input type="radio" name="loan_experience" value="Yes" required> Yes</label>
                        <label class="loan-form-radio-label"><input type="radio" name="loan_experience" value="No"> No</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">If yes, from where?</label>
                    <input type="text" class="loan-form-input" name="loan_source">
                </div>
                <div class="navigation-buttons">
                    <button type="button" class="nav-btn" onclick="prevSection('section-b', 'section-a')">← Previous</button>
                    <button type="button" class="nav-btn" onclick="nextSection('section-b', 'section-c')">Next →</button>
                </div>
            </div>
            
            <!-- SECTION C: GUARANTOR INFORMATION -->
            <div class="form-section" id="section-c">
                <div class="loan-form-section-title">SECTION C: GUARANTOR INFORMATION</div>
                <div class="form-group">
                    <label class="loan-form-label">17. Guarantor's Name</label>
                    <input type="text" class="loan-form-input" name="guarantor_name" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">18. Relationship to Applicant</label>
                    <input type="text" class="loan-form-input" name="guarantor_relationship" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">19. Guarantor's Phone Number</label>
                    <input type="tel" class="loan-form-input" name="guarantor_phone" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">20. Guarantor's Address</label>
                    <input type="text" class="loan-form-input" name="guarantor_address" required>
                </div>
                <div class="form-group">
                    <label class="loan-form-label">21. Guarantor's Occupation</label>
                    <input type="text" class="loan-form-input" name="guarantor_occupation" required>
                </div>
                <div class="navigation-buttons">
                    <button type="button" class="nav-btn" onclick="prevSection('section-c', 'section-b')">← Previous</button>
                    <button type="button" class="nav-btn" onclick="nextSection('section-c', 'section-d')">Next →</button>
                </div>
            </div>
            
            <!-- SECTION D: DECLARATION -->
            <div class="form-section" id="section-d">
                <div class="loan-form-section-title">SECTION D: DECLARATION</div>
                <div class="loan-form-declaration">
                    I, <input type="text" class="loan-form-input" name="declarant_name" style="display:inline-block;width:180px;max-width:50%;margin-bottom:0.2rem;">, hereby declare that the information provided above is true and accurate to the best of my knowledge. I understand that this is an interest-free loan and I commit to repaying as agreed with OSIAGA Foundation.
                </div>
                <div class="loan-form-signature-row">
                    <div class="form-group">
                        <label class="loan-form-label">Signature of Applicant</label>
                        <input type="text" class="loan-form-input" name="applicant_signature">
                    </div>
                    <div class="form-group">
                        <label class="loan-form-label">Date</label>
                        <input type="date" class="loan-form-input" name="applicant_date">
                    </div>
                </div>
                <div class="loan-form-signature-row">
                    <div class="form-group">
                        <label class="loan-form-label">Signature of Guarantor</label>
                        <input type="text" class="loan-form-input" name="guarantor_signature">
                    </div>
                    <div class="form-group">
                        <label class="loan-form-label">Date</label>
                        <input type="date" class="loan-form-input" name="guarantor_date">
                    </div>
                </div>
                <div class="navigation-buttons">
                    <button type="button" class="nav-btn" onclick="prevSection('section-d', 'section-c')">← Previous</button>
                    <button type="submit" class="nav-btn">Submit Application</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
function nextSection(currentSection, nextSection) {
    // Hide current section
    document.getElementById(currentSection).classList.remove('active');
    // Show next section
    document.getElementById(nextSection).classList.add('active');
    // Update progress indicator
    updateProgress(nextSection);
    // Scroll to top of form
    document.querySelector('.loan-form-card').scrollIntoView({ behavior: 'smooth' });
}

function prevSection(currentSection, prevSection) {
    // Hide current section
    document.getElementById(currentSection).classList.remove('active');
    // Show previous section
    document.getElementById(prevSection).classList.add('active');
    // Update progress indicator
    updateProgress(prevSection);
    // Scroll to top of form
    document.querySelector('.loan-form-card').scrollIntoView({ behavior: 'smooth' });
}

function updateProgress(sectionId) {
    const steps = {
        'section-a': 1,
        'section-b': 2,
        'section-c': 3,
        'section-d': 4
    };
    
    const currentStep = steps[sectionId];
    
    // Update all progress steps
    for (let i = 1; i <= 4; i++) {
        const stepElement = document.getElementById(`step-${i}`);
        if (i <= currentStep) {
            stepElement.classList.add('active');
        } else {
            stepElement.classList.remove('active');
        }
    }
}
</script>

<?php
include 'includes/footer.php';
?>