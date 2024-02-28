# Kas ir API?
API (application programming interface) ir veids, kā divas vai vairākas datorprogrammas vai komponenti var sazināties savā starpā, peimēram restorāna pasūtijums ir komunikāciju starp viesmīli un virtuvi.

# Kā deklarēt mainīgo PHP valodā?
PHP mainīgo var deklrēt mainīgo izmantojot $ (naudas zīmi) un rakstot nosaukumu, piemēram '$variable', '$number'

# Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
Laravel izmanto MVC (Model-View-Controller) arhitektūra. Šī arhitektūra atdala biznesa loģiku no prezentācijas loģikas. Modelis apstrādā datu pārvaldību, view rūpējas par lietotāja interfeisa renderēšanu, un kontrolieris pārvalda datu plūsmu starp modeli un view.

# Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM (Object-relational mapping) ir veids, kā saskaņot programmēšanas kodu ar datu bāzes struktūrām. ORM izveidotu slāni starp programmēšanas valodu un relāciju datu bāzi.
Tie vienkāršo parastās darbības, nodrošina objektu kartošanu un palīdz koda organizēšanā.

# Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
$users = User::where('rating', '>', 4)->get();

