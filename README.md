- Εκφώνηση και προαπαιτούμενα του Project
-
Ένας χρήστης: μάγειρας. Ο μάγειρας θα μπορεί να καταχωρεί τρόφιμα και συνταγές. Οι συνταγές θα έχουν δύο μέρη, υλικά και εκτέλεση. Για κάθε υλικό θα καταγράφεται και η ποσότητα. Το σύστημα θα υποστηρίζει αναζήτηση με υλικά και ποσότητες που θα έχει ο μάγειρας διαθέσιμα και θα τυπώνει τις συνταγές που μπορεί να πραγματοποιήσει. Θα υπάρχει δυνατότητα προβολής των συνταγών ανά κατηγορίες και χρόνο εκτέλεσης.

- Δυνατότητες της εφαρμογής μας
- 
- Καταχώρηση
-
- Ο χρήστης καταχωρεί συνταγές συμπληρώνοντας τα πεδία.
- 5 υποχρεωτικά πεδία (όνομα συνταγής, υλικά, χρόνος  εκτέλεσης, είδος και τρόπος εκτέλεσης της συνταγής).
- 1 προαιρετικό πεδίο (φωτογραφία συνταγής).
- Μέγιστος αριθμός ψηφίων στο πεδίο του χρόνου: 3 (δηλ. 999 λεπτά).
- Αν ο χρήστης δεν δώσει φωτογραφία τότε παίρνει μια default εικόνα.
- 2 έλεγχοι 1) αν κάποιο απ' τα υποχρεωτικά πεδία είναι κενό.
	       2) αν ο χρόνος είναι αριθμός.
- Αν δεν περάσει τους ελέγχους τότε βγάζει κατάλληλο μήνυμα αναλόγως του error και γυρνά αυτόματα πίσω στη φόρμα μετά από 3 δευτερόλεπτα γεμίζοντας τα πεδία με τα στοιχεία που είχε δώσει ο χρήστης.
- Αν τους περάσει τότε βγάζει κατάλληλο μήνυμα με το όνομα της συνταγής που καταχωρήθηκε, την προσθέτει στη βάση και γυρνά αυτόματα πίσω στην καταχώρηση μετά από 3 δευτερόλεπτα.

- Επεξεργασία
- 
- Ο χρήστης επιλέγει κάποια απ' τις συνταγές που βρίσκονται στη βάση μέσω drop down menu.
- Εμφανίζει επάνω το όνομα της συνταγής που είναι προς επεξεργασία και γεμίζει τα πεδία με τις ήδη υπάρχουσες τιμές της συνταγής (εκτός απ' το είδος που για κάποιο λόγο δεν γίνεται – κάτι πρέπει να παίζει με τα ελληνικά).
- Ο χρήστης μπορεί να πραγματοποιήσει οποιαδήποτε αλλαγή.
- Δυνατότητα ακύρωσης της επεξεργασίας μέσω ειδικού συνδέσμου και επιστροφή στο drop down menu.
- Ίδιοι έλεγχοι και χαρακτηριστικά όπως στην καταχώρηση.
- Κατάλληλο μήνυμα αν ο χρήστης δεν άλλαξε τίποτα και αυτόματη επιστροφή στο drop down menu.
- Κατάλληλο μήνυμα αν έγινε κάποια αλλαγή και αυτόματη επιστροφή στο drop down menu.

- Διαγραφή
- 
- Ο χρήστης επιλέγει κάποια απ' τις συνταγές που βρίσκονται στη βάση μέσω drop down menu.
- Διαγραφή συνταγής με κατάλληλο μήνυμα και αυτόματη επιστροφή στο drop down menu. 

- Αναζήτηση
- 
- Δυνατότητα αναζήτησης και προβολής συνταγών μέσω των κατάλληλων λέξεων-κλειδιών.
- Αναζήτηση στα πεδία όνομα συνταγής και υλικά.
- Αν ο χρήστης πατήσει αναζήτηση με κενό το πεδίο τότε εμφανίζει όλες τις συνταγές (το έκανα επίτηδες έτσι ώστε να υπάρχει δυνατότητα προβολής όλων των συνταγών).
- Εμφάνιση λέξης-κλειδιού που χρησιμοποιήθηκε για την αναζήτηση.
- Προβολή πλήθους αποτελεσμάτων.
- Δυνατότητα ταξινόμησης (αύξουσας και φθίνουσας) βάση ονόματος, χρόνου εκτέλεσης και είδους της συνταγής πατώντας στους ανάλογους συνδέσμους.
- Εμφάνιση φωτογραφίας πλήρους μεγέθους σε νέο παράθυρο πατώντας πάνω της.

- Μερικά λόγια σχετικά με την υλοποίηση της εφαρμογής
- 
Αρχικά ξεκινήσαμε παρατηρώντας ιστοσελίδες με συνταγές ώστε να πάρουμε ιδέες για το πώς θα υλοποιήσουμε τη δική μας εφαρμογή. Αρχίσαμε σιγά σιγά δημιουργώντας τις φόρμες, συνολικά: 5 text inputs, 4 drop down menu, 4 textarea, 2 file inputs και 5 submit buttons. Στη συνέχεια δημιουργήσαμε τη βάση με τα κατάλληλα πεδία και τα χαρακτηριστικά τους. Πρώτα υλοποιήσαμε την “Διαγραφή” μιας και ήθελε τον λιγότερο κώδικα και είχαμε τις υπάρχουσες γνώσεις μέσα απ’ το εργαστήριο για να την δημιουργήσουμε. Έπειτα ακολούθησαν η “Καταχώρηση” και η “Επεξεργασία” μιας και χρειάζονταν σχεδόν τον ίδιο κώδικα και τέλος πραγματοποιήσαμε την αναζήτηση, προβολή και ταξινόμηση των συνταγών. Δεν χρειάστηκε να ψάξουμε πολύ στο διαδίκτυο για βοήθεια σχετικά με την υλοποίηση της εφαρμογής, ότι χρειαζόμασταν υπήρχε στις διαφάνειες των θεωριών και στις ασκήσεις των εργαστηρίων. Τέλος προσθέσαμε μερικές ακόμη πινελιές όπως η εισαγωγή φωτογραφιών και το αυτόματο redirect μέσω JavaScript και φυσικά την μορφοποίηση της εφαρμογής με css.

