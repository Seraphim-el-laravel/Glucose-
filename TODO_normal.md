## TODO: Add Normal Category to Diabetes Diagnosis

## Pending Tasks
- [x] 1. Update SampleDataSeeder.php to add "Normal" as 5th penyakit.
- [x] 2. Modify ScreeningController.php to calculate CF for Normal: if highest CF < 0.5, Normal CF = 1 - highest CF, else Normal CF = 0.
- [x] 3. Run database seeder to update data.
- [x] 4. Test the complete flow to ensure Normal is diagnosed when appropriate.
- [x] 5. Add hasil_diagnosis column to pasiens table.
- [x] 6. Update ScreeningController to save diagnosis result to patient record.
- [x] 7. Update admin pasien index view to display diagnosis results.
- [x] 8. Implement admin authentication system.
