while (true)
{
    SchrijfInKleur("\n╔════════════════════════════╗", ConsoleColor.DarkCyan);
    SchrijfInKleur("║       DUNGEON CRAWLER      ║", ConsoleColor.Cyan);
    SchrijfInKleur("╚════════════════════════════╝", ConsoleColor.DarkCyan);
    Console.WriteLine("[1] Nieuw spel");
    Console.WriteLine("[0] Afsluiten");
    Console.Write("Jouw keuze: ");

    string? keuze = Console.ReadLine();

    if (keuze == "0" || keuze == null)
    {
        break;
    }

    if (keuze == "1")
    {
        SpeelDungeon();
    }
    else
    {
        SchrijfInKleur("Kies 1 of 0.", ConsoleColor.Yellow);
    }
}

static void SpeelDungeon()
{
    Console.Write("\nWat is je spelernaam? ");
    string? naam = Console.ReadLine()?.Trim();

    if (string.IsNullOrWhiteSpace(naam))
    {
        SchrijfInKleur("Vul eerst een naam in.", ConsoleColor.Yellow);
        return;
    }

    int hp = 20;
    bool heeftDrankje = true;
    string[] monsters = { "Goblin", "Skelet", "Draak" };

    Console.WriteLine($"\nWelkom, {naam}. Achter de derde deur ligt de schat.");

    for (int kamer = 0; kamer < monsters.Length; kamer++)
    {
        string monster = monsters[kamer];
        int monsterHp = 6 + kamer * 3;
        int monsterSchade = 2 + kamer;

        SchrijfInKleur($"\n══ Kamer {kamer + 1} van {monsters.Length} · {monster} ══", ConsoleColor.Cyan);

        while (monsterHp > 0)
        {
            ToonLevensbalk(hp);
            Console.WriteLine($"{monster} heeft {monsterHp} HP.");
            Console.WriteLine($"Drankjes over: {(heeftDrankje ? 1 : 0)}");
            Console.Write("[1] Aanvallen  [2] Genezen  [0] Vluchten > ");

            switch (Console.ReadLine())
            {
                case "1":
                    monsterHp -= 4;
                    Console.WriteLine($"Je doet 4 schade aan de {monster}.");
                    break;

                case "2":
                    if (!heeftDrankje || hp == 20)
                    {
                        SchrijfInKleur("Je hebt geen drankje over of je HP is al vol.", ConsoleColor.Yellow);
                        continue;
                    }

                    int herstel = Math.Min(10, 20 - hp);
                    hp += herstel;
                    heeftDrankje = false;
                    SchrijfInKleur($"+{herstel} HP. Het drankje is op.", ConsoleColor.Green);
                    continue;

                case "0":
                case null:
                    Console.WriteLine("Je vlucht terug naar de ingang.");
                    return;

                default:
                    SchrijfInKleur("Kies 1, 2 of 0.", ConsoleColor.Yellow);
                    continue;
            }

            if (monsterHp <= 0)
            {
                SchrijfInKleur($"Je hebt de {monster} verslagen!", ConsoleColor.Green);
                break;
            }

            hp -= monsterSchade;
            SchrijfInKleur($"De {monster} slaat terug. -{monsterSchade} HP.", ConsoleColor.Red);

            if (hp <= 0)
            {
                SchrijfInKleur("\nGAME OVER · Je gaat terug naar het hoofdmenu.", ConsoleColor.Red);
                return;
            }
        }
    }

    SchrijfInKleur($"\n★ GEWONNEN! {naam} opent de schatkist. ★", ConsoleColor.Yellow);
}

static void ToonLevensbalk(int hp)
{
    string vol = new string('█', hp);
    string leeg = new string('░', 20 - hp);
    ConsoleColor kleur = hp <= 6 ? ConsoleColor.Red : ConsoleColor.Green;

    SchrijfInKleur($"\nHP [{vol}{leeg}] {hp}/20", kleur);
}

static void SchrijfInKleur(string tekst, ConsoleColor kleur)
{
    Console.ForegroundColor = kleur;
    Console.WriteLine(tekst);
    Console.ResetColor();
}