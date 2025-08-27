<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Title" placeholder="CEO" />
        <x-forms.input name="salary" label="Salary" placeholder="$90,000 USD" />
        <x-forms.input name="location" label="Location" placeholder="Dhaka" />
    
        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.divider />

        <x-forms.input label="URL" name="url" placeholder="www.dpdc.gov.bd" />
        <x-forms.checkbox label="Feature (Cost Extra)" name="featured" />
        <x-forms.input label="Tags (Comma Separated)" name="tags" placeholder="laracast. video, education" />
        
        
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>