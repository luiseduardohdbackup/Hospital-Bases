SELECT 'B'
SELECT	DISTINCT *
FROM	Staff s, Qualifications q, WorkExperience w
WHERE	s.StaffNum = q.StaffNum AND s.StaffNum = w.StaffNum AND (q.Type = 'Nurse' OR w.Position = 'Enfermero');

SELECT	DISTINCT *
FROM	Staff s, Qualifications q, WorkExperience w
WHERE	s.StaffNum = q.StaffNum AND s.StaffNum = w.StaffNum AND (q.Type = 'Pedriatic' OR w.Position = 'Doctor');

SELECT	DISTINCT *
FROM	Staff s, Qualifications q
WHERE	s.StaffNum = q.StaffNum AND q.Type = 'Surgeon';

SELECT	DISTINCT *
FROM	Staff s, Qualifications q
WHERE	s.StaffNum = q.StaffNum AND q.Type = 'neurosurgeon';

SELECT	DISTINCT *
FROM	Staff s, Qualifications q
WHERE	s.StaffNum = q.StaffNum AND q.Type = 'Cardiologist';

SELECT	DISTINCT *
FROM	Staff s, Qualifications q
WHERE	s.StaffNum = q.StaffNum AND q.Type = 'Anesthesiologist';

SELECT	DISTINCT *
FROM	Staff s, Qualifications q
WHERE	s.StaffNum = q.StaffNum AND q.Type = 'ophthalmologist';

SELECT	DISTINCT *
FROM	Staff s, Qualifications q
WHERE	s.StaffNum = q.StaffNum AND q.Type = 'otolaryngologist';

SELECT	DISTINCT *
FROM	Staff s, WorkExperience w
WHERE	s.StaffNum = w.StaffNum AND w.Position = 'Jefe';

SELECT	DISTINCT *
FROM	Staff s, WorkExperience w
WHERE	s.StaffNum = w.StaffNum AND w.Position = 'Intendente';

SELECT	DISTINCT *
FROM	Staff s, WorkExperience w
WHERE	s.StaffNum = w.StaffNum AND w.Position = 'Gerente';


SELECT 'C'
SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '1';

SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '2';

SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '3';

SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '4';

SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '5';

SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '6';

SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '7';

SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '8';

SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '9';

SELECT	*
FROM	Staff s, WardStaff wf
WHERE	s.StaffNum = wf.staffNo AND wf.wardNo = '10';

SELECT 'F'
SELECT	*
FROM	Patient p
WHERE	p.PatientNumber NOT IN (SELECT p.PatientNumber
								FROM Patient p, Ward w, PatientAllocation pa
								WHERE	p.PatientNumber = pa.PatientNumber AND pa.wardNo = w.wardNumber);

SELECT 'H'
SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '1';

SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '2';

SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '3';

SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '4';

SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '5';

SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '6';

SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '7';

SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '8';

SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '9';

SELECT	*
FROM Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND  pa.wardNo = '10';

SELECT	*
FROM	PatientAllocation

SELECT 'I'
SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '1';

SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '2';

SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '3';

SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '4';

SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '5';

SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '6';

SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '7';

SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '8';

SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '9';

SELECT	*
FROM	Patient p, PatientAllocation pa
WHERE	p.PatientNumber = pa.PatientNumber AND pa.DatePlaced IS NULL AND pa.wardNo = '10';


SELECT 'K'	-- Como hacerle cuando se agregan pacientes
SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '1';

SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '2';

SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '3';

SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '4';

SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '5';

SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '6';

SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '7';

SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '8';

SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '9';

SELECT	*
FROM	Patient p, medicationList m, drug d
WHERE	p.PatientNumber = m.patientNumber AND m.drugNumber = d.drugNumber AND p.PatientNumber = '10';


SELECT	'N'
SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '1';

SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '2';

SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '3';

SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '4';

SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '5';

SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '6';

SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '7';

SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '8';

SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '9';

SELECT	*
FROM	Requisitions r, Supplies ss
WHERE	ss.itemNumber = r.ItemNo AND r.WardNo = '10';

