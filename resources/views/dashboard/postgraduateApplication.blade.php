@extends('layouts.dashboard')

@section('content')
    <div class="border border-gray-300">
            <!-- Heading Section -->
            <div class="flex justify-between items-center px-4 py-2 bg-gray-100">
            <!-- Undergraduate Heading with border-right -->
            <a href="{{ route('undergraduateSection') }}" 
            class="text-blue-500 w-1/2 text-center border-r border-gray-300 @if($scheme == 'undergraduate') font-bold @endif">
                Undergraduate
            </a>
            <!-- Postgraduate Heading -->
            <a href="{{ route('postgraduateSection') }}" 
            class="text-blue-500 w-1/2 text-center @if($scheme == 'postgraduate') font-bold @endif">
                Postgraduate
            </a>
        </div>
        <div class="border-t border-gray-300 px-4 py-2">
            <p class="schemeText">
                @if($scheme == 'undergraduate')
                    <p>This scheme is for undergraduate programs</p>
                @elseif($scheme == 'postgraduate')
                    <p>This scheme is for postgraduate programs</p>
                @else
                    Please select the scheme you would like to apply for.
                @endif
            </p>
        </div>
    </div>
    <div class="border-t border-gray-300 px-4 py-2 flex-grow">
        <!-- Main Content -->
        <form>
    <!-- SECTION 1: PERSONAL DATA -->
    <div class="mb-8">
        <h2 class="text-lg font-bold text-center mb-2">SECTION 1: PERSONAL DATA</h2>
        <!-- Name and Gender -->
        <div class="flex flex-wrap mb-4">
            <div class="w-1/2 md:w-1/2 md:pr-4 relative">
                <label for="first_name" class="block font-bold">First Name:</label>
                <input type="text" id="first_name" name="first_name" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/2 md:w-1/2 md:pl-4 relative">
                <label for="last_name" class="block font-bold">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/2 md:w-1/2 md:pr-4 mt-4 md:mt-0 relative">
                <label for="other_names" class="block font-bold">Other Names:</label>
                <input type="text" id="other_names" name="other_names" class="form-input rounded-md w-full">
            </div>
            <div class="w-1/2 md:w-1/2 md:pr-4 relative translate-x-4">
                <label for="gender" class="block font-bold">Gender:</label>
                <select id="gender" name="gender" required class="form-select rounded-md w-full">
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
        </div>
        <!-- Date of Birth, Passport Size Photo, Home Address -->
        <div class="flex flex-wrap mb-4">
            <div class="w-1/2 md:w-1/2 md:pr-4 relative">
                <label for="date_of_birth" class="block font-bold">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/2 md:w-1/2 md:px-2 mt-4 md:mt-0 relative translate-x-2">
                <label for="photo" class="block font-bold">Passport Size Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/2 md:w-1/2 md:pl-4 mt-4 md:mt-0 relative -translate-x-4">
                <label for="home_address" class="block font-bold">Home Address:</label>
                <input type="text" id="home_address" name="home_address" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/2 md:w-1/2 md:pl-4 relative">
                <label for="marital_status" class="block font-bold">Marital Status:</label>
                <select id="marital_status" name="marital_status" required class="form-select rounded-md w-full">
                    <option value="" disabled selected>Select Marital Status</option>
                    <option value="married">Married</option>
                    <option value="single">Single</option>
                </select>
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
        </div>
        <!-- Telephone, Email, Religion -->
        <div class="flex flex-wrap mb-4">
            <div class="w-1/3 md:w-1/3 md:pr-4 relative">
                <label for="telephone" class="block font-bold">Telephone Number:</label>
                <input type="tel" id="telephone" name="telephone" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/3 md:w-1/3 md:px-2 mt-4 md:mt-0 relative">
                <label for="email" class="block font-bold">Email:</label>
                <input type="email" id="email" name="email" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/3 md:w-1/3 md:pl-4 mt-4 md:mt-0 relative">
                <label for="religion" class="block font-bold">Religion:</label>
                <input type="text" id="religion" name="religion" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
        </div>
        <!-- Nationality, National ID No., Passport No., Emergency Contact -->
        <div class="flex flex-wrap mb-4">
            <div class="w-1/3 md:w-1/3 md:pr-4 relative">
                <label for="nationality" class="block font-bold">Nationality:</label>
                <input type="text" id="nationality" name="nationality" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/3 md:w-1/3 md:px-2 mt-4 md:mt-0 relative">
                <label for="national_id" class="block font-bold">National ID No.:</label>
                <input type="text" id="national_id" name="national_id" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/3 md:w-1/3 md:px-2 mt-4 md:mt-0 relative translate-x-2">
                <label for="passport_no" class="block font-bold">Passport No.:</label>
                <input type="text" id="passport_no" name="passport_no" class="form-input rounded-md w-full">
            </div>
        </div>
        <div class="flex flex-wrap mb-4">
            <div class="w-1/3 md:w-1/3 md:pl-4 mt-4 md:mt-0 relative -translate-x-4">
                <label for="emergency_contact_person" class="block font-bold">Emergency Contact Person:</label>
                <input type="text" id="emergency_contact_person" name="emergency_contact_person" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/3 md:w-1/3 md:px-2 mt-4 md:mt-0 relative">
                <label for="emergency_contact_telephone" class="block font-bold">Emergency Contact Telephone:</label>
                <input type="tel" id="emergency_contact_telephone" name="emergency_contact_telephone" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-1/3 md:w-1/3 md:px-2 mt-4 md:mt-0 relative translate-x-2">
                <label for="emergency_contact_address" class="block font-bold">Emergency Contact Address:</label>
                <input type="text" id="emergency_contact_address" name="emergency_contact_address" required class="form-input rounded-md w-full">
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
        </div>
        <!-- Save Button -->
        <div class="text-right">
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
        </div>
    </div>

    <!-- SECTION 2: ACADEMIC PROGRAM -->
    <div class="mb-8">
        <h2 class="text-lg font-bold text-center mb-2">SECTION 2: ACADEMIC PROGRAM</h2>
        <!-- Academic Year, Scheme, Intake, Category -->
        <div class="flex flex-wrap mb-4">
            <div class="w-full md:w-1/4 md:pr-4 relative">
                <label for="academic_year" class="block font-bold">Academic Year:</label>
                <select id="academic_year" name="academic_year" class="form-select rounded-md w-full">
                    <option value="2024/2025">2024/2025</option>
                </select>
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-full md:w-1/4 md:px-2 mt-4 md:mt-0 relative">
                <label for="scheme" class="block font-bold">Scheme:</label>
                <select id="scheme" name="scheme" class="form-select rounded-md w-full">
                    <option value="direct_entry">Direct Entry</option>
                    <option value="diploma_entry">Diploma Entry</option>
                </select>
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-full md:w-1/4 md:px-2 mt-4 md:mt-0 relative">
                <label for="intake" class="block font-bold">Intake:</label>
                <select id="intake" name="intake" class="form-select rounded-md w-full">
                    <option value="august">August</option>
                    <option value="january">January</option>
                </select>
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-full md:w-1/4 md:pl-4 mt-4 md:mt-0 relative">
                <label for="category" class="block font-bold">Category:</label>
                <select id="category" name="category" class="form-select rounded-md w-full">
                    <option value="undergraduate">Postgraduate</option>
                    <option value="postgraduate">Undergraduate</option>
                </select>
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
        </div>
        <!-- First Choice Program, Second Choice Program, Session -->
        <div class="flex flex-wrap mb-4">
            <div class="w-full md:w-1/2 md:pr-4 relative">
                <label for="first_choice_program" class="block font-bold">First Choice Program:</label>
                <select id="first_choice_program" name="first_choice_program" class="form-select rounded-md w-full">
                    <option value="bcp">Postgraduate Diploma in Business Intelligence and Data Analytics (PGD BIA)</option>
                    <option value="bis">Postgraduate Diploma in Strategic Management and Leadership (PGD SML)</option>
                </select>
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-full md:w-1/2 md:pl-4 relative">
                <label for="second_choice_program" class="block font-bold">Second Choice Program:</label>
                <select id="second_choice_program" name="second_choice_program" class="form-select rounded-md w-full">
                    <option value="bcp">Postgraduate Diploma in Business Intelligence and Data Analytics (PGD BIA)</option>
                    <option value="bis">Postgraduate Diploma in Strategic Management and Leadership (PGD SML)</option>
                </select>
                <span class="text-red-500 absolute top--px right--2">*</span>
            </div>
            <div class="w-full mt-4 relative">
                <span class="block font-bold mb-2">Session:</span>
                <label class="inline-flex items-center mr-4">
                    <input type="checkbox" name="session" value="day">
                    <span class="ml-2">Day</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="session" value="weekend">
                    <span class="ml-2">Weekend</span>
                </label>
                <span class="text-red-500 absolute top-0 right--2">*</span>
            </div>
        </div>
        <!-- How did you know about this University? -->
        <div class="mb-4 relative">
            <label for="how_know" class="block font-bold">How did you know about this University? (e.g. Through Radio, Social Media, Friends etc)</label>
            <input type="text" id="how_know" name="how_know" class="form-input rounded-md w-full">
            <span class="text-red-500 absolute top--px right--2">*</span>
        </div>
        <!-- Save Button -->
        <div class="text-right">
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
        </div>
    </div>

    <!-- SECTION 3: ACADEMIC QUALIFICATIONS -->
<div class="mb-8">
    <h2 class="text-lg font-bold text-center mb-2">SECTION 3: ACADEMIC QUALIFICATIONS</h2>
    <!-- First Table: Schools Attended -->
    <div class="mb-4">
        <p class="font-bold mb-2">Table 1: Schools Attended</p>
        <table class="w-full mb-4">
            <thead>
                <tr>
                    <th class="border px-4 py-2">No.</th>
                    <th class="border px-4 py-2 w-2/3">Schools Attended</th>
                    <th class="border px-4 py-2 w-1/3" colspan="2">Year of Study</th>
                </tr>
                <tr>
                    <th class="border px-4 py-2"></th>
                    <th class="border px-4 py-2 w-2/3"></th>
                    <th class="border px-4 py-2 w-1/6">From</th>
                    <th class="border px-4 py-2 w-1/6">To</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="school_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="school_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">3</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="school_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">4</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="school_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Second Table: Colleges/Universities Attended -->
    <div class="mb-4">
        <p class="font-bold mb-2">Table 2: Colleges/Universities Attended</p>
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border px-4 py-2">No.</th>
                    <th class="border px-4 py-2 w-1/3">Colleges/Universities Attended</th>
                    <th class="border px-4 py-2 w-1/3">Qualification Attained</th>
                    <th class="border px-4 py-2 w-1/3" colspan="2">Year of Study</th>
                </tr>
                <tr>
                    <th class="border px-4 py-2"></th>
                    <th class="border px-4 py-2 w-1/3"></th>
                    <th class="border px-4 py-2 w-1/3"></th>
                    <th class="border px-4 py-2 w-1/6">From</th>
                    <th class="border px-4 py-2 w-1/6">To</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="university_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="qualification_attained[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="university_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="qualification_attained[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">3</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="university_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="qualification_attained[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">4</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="university_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="qualification_attained[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Upload Documents -->
        <div class="mb-4 relative">
            <label for="documents" class="block font-bold mb-2">Upload Documents:</label>
            <input type="file" id="documents" name="documents" accept=".pdf" class="form-input rounded-md w-full" required>
            <p class="text-sm text-gray-500">Upload PDF documents only.</p>
            <span class="text-red-500 absolute top-0 right-0">*</span>
        </div>

    </div>
    <!-- Save Button -->
    <div class="text-right">
        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
    </div>
</div>

<!-- SECTION 4: APPLICANT'S WORKING EXPERIENCE (If Applicable) -->
<div class="mb-8">
    <h2 class="text-lg font-bold text-center mb-2">SECTION 4: APPLICANT'S WORKING EXPERIENCE (If Applicable)</h2>
    <!-- Table: Applicant's Working Experience -->
    <div class="mb-4">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border px-4 py-2">No.</th>
                    <th class="border px-4 py-2 w-1/4" colspan="2">Year of Study</th>
                    <th class="border px-4 py-2 w-1/4">Employer</th>
                    <th class="border px-4 py-2 w-1/4">Designation</th>
                    <th class="border px-4 py-2 w-1/4">Nature of Assignment</th>
                </tr>
                <tr>
                    <th class="border px-4 py-2"></th>
                    <th class="border px-4 py-2 w-1/8">From</th>
                    <th class="border px-4 py-2 w-1/8">To</th>
                    <th class="border px-4 py-2 w-1/4"></th>
                    <th class="border px-4 py-2 w-1/4"></th>
                    <th class="border px-4 py-2 w-1/4"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="university_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="qualification_attained[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="university_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="qualification_attained[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">3</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="university_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="qualification_attained[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">4</td>
                    <td class="border px-4 py-2">
                        <input type="text" name="university_attended[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="qualification_attained[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_from[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                    <td class="border px-4 py-2">
                        <input type="text" name="year_of_study_to[]" class="form-input rounded-md w-full">
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
    <!-- Save Button -->
    <div class="text-right">
        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
    </div>
</div>

    <!-- SECTION 5: DECLARATION BY APPLICANT -->
<div class="mb-8">
    <h2 class="text-lg font-bold text-center mb-2">SECTION 5: DECLARATION BY APPLICANT</h2>
    <!-- Declaration Checkbox -->
    <div class="mb-4 relative">
        <label for="declaration" class="block font-bold mb-2">
            <input type="checkbox" id="declaration" name="declaration" class="mr-2" required>
            I certify that the information given in this application form is correct. I also acknowledge that omission or misrepresentation of facts will lead to the cancellation of application or expulsion from the university if later discovered.
        </label>
        <span class="text-red-500 absolute top-0 right-0">*</span>
    </div>
</div>
</div>



    
    <!-- Submit Button -->
    <div class="text-center">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </div>
</form>

    </div>
@endsection