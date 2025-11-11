# TODO: Implement Public Screening for Diabetes Diagnosis

## Pending Tasks
- [x] 1. Create migration for gejala_penyakit pivot table (gejala_id, penyakit_id, cf).
- [x] 2. Update Gejala and Penyakit models with belongsToMany relationships.
- [x] 3. Create ScreeningController with index() for form display and store() for diagnosis processing.
- [x] 4. Implement CF calculation logic: For each disease, multiply CF values of selected symptoms related to that disease.
- [x] 5. Select disease with highest CF as diagnosis result.
- [x] 6. Add public routes: GET /screening, POST /result.
- [x] 7. Create views: screening.blade.php (checkbox form for symptoms), result.blade.php (diagnosis display).
- [x] 8. Update index.blade.php "Mulai Diagnosis" button to link to /screening.
- [x] 9. Create seeder for sample gejala, penyakit, and gejala_penyakit data.
- [x] 10. Test the complete flow.
