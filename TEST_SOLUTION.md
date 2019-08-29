# Teknisk Test for Schibsted SMB aka Mittanbud

## Min Fremgangsmetodikk:
<li>
1. Les gjennom oppgaven.
2. Tenk gjennom potensielle løsninger. Mmm middag.
3. Formuler en plan.
4. Sett opp version kontroll
5. Test hver loop med lite dataset
6. De loopene som umiddelbart er klare at kommer til å kjøre raskere enn andre, rank dem.
7. Skriv en timer funksjon. Echo ut tidsbruk etter å ha kjørt gjennom loopen med fult dataset.
8. Benchmark loopene.
9. Rank based on IRL benchmark
10. Noter alle notices and warnings som følge av empty array (oppgave B), gjør først?
</li>

NB! Husk at det er PHP 7.1 som skal brukes, pcen min er på PHP7.2, installer 7.1 og kjør upgrade-alternatives til å defaulte til 7.1 inntil reboot.



## TODO
A) Please arrange the loops after how fast they will run under PHP 7.1. If the dataset $array has about 1000000 int elements.

Dette løser jeg ved å lage et script for hver av funksjonene. Teste dem med et lite dataset.
Så generere en array med 1,000,000 int elementer, og kjøre en timer for å teste tidsbruk.
Gjenta scriptet 100 ganger for å teste benchmark resultatet.




b) What will happen to the four loops if the dataset is empty $array = NULL;

### Preliminary Results
→ A: Throw notice: Undefined variable 
	Warning: count(): Parameter must be an array or an object that implements Countable.


→ B
