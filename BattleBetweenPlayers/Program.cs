using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace reabilitaciya
{
    class Program
    {
        static void Main(string[] args)
        {
            Character Wizard = new Character(4, "Rincewind", 2, 10);
            Character Warrior = new Character(1, "Konan", 8, 16);
            Character Shaman = new Character(2, "Thrall", 4, 14);
            Character Paladin = new Character(3, "Tirion", 6, 20);
            Character firstPlayerCharacter = new Character(0, "null", 0, 0);
            Character secondPlayerCharacter = new Character(0, "null", 0, 0);
            Console.WriteLine($"Первый игрок. Выберите персонажа введя его id:\n{Wizard}\n{Warrior}\n{Shaman}\n{Paladin}");
            firstPlayerCharacter = Character.InputCheckAndChoiceCharacter(firstPlayerCharacter, Wizard, Warrior, Shaman, Paladin);
            Console.WriteLine($"Второй игрок. Выберите персонажа введя его id:\n{Wizard}\n{Warrior}\n{Shaman}\n{Paladin}");
            secondPlayerCharacter = Character.InputCheckAndChoiceCharacter(secondPlayerCharacter, Wizard, Warrior, Shaman, Paladin);
            Battle firstPlayerBody = new Battle(0, 0, 0);
            Battle secondPlayerBody = new Battle(0, 0, 0);
            //Battle.AttackOrDefense(firstPlayerCharacter, secondPlayerCharacter, firstPlayerBody, secondPlayerBody);
            Console.WriteLine("Пожалуйста, подождите.");
            Thread.Sleep(3000);
            for(int i = 1, firstPlayerHeal, secondPlayerHeal; (firstPlayerHeal = Character.ReturnHeal(firstPlayerCharacter)) > 0 && (secondPlayerHeal = Character.ReturnHeal(secondPlayerCharacter)) > 0; i++)
            {

                Console.Clear();
                Console.WriteLine($"\t\t\t\t{i} - Раунд!");
                Console.WriteLine("Первый игрок. Вы атакуете или защищаетесь?\nВведите: 1 - Для атаки, 2 - Для защиты.");
                int AttackOrDefense = Battle.InputCheckAttackOrDefense();
                switch (AttackOrDefense)
                {
                    case 1:
                        secondPlayerBody = Battle.PlayerAttack(secondPlayerBody);
                        break;
                    case 2:
                        firstPlayerBody = Battle.PlayerDefense(firstPlayerBody);
                        break;
                }
                Console.WriteLine("\n\tПожалуйста, подождите.");
                Thread.Sleep(3000);
                Console.Clear();
                Console.WriteLine("Второй игрок. Вы атакуете или защищаетесь?\nВведите: 1 - Для атаки, 2 - Для защиты.");
                AttackOrDefense = Battle.InputCheckAttackOrDefense();
                switch (AttackOrDefense)
                {
                    case 1:
                        firstPlayerBody = Battle.PlayerAttack(firstPlayerBody);
                        break;
                    case 2:
                        secondPlayerBody = Battle.PlayerDefense(secondPlayerBody);
                        break;
                }
                Console.WriteLine("\n\tПожалуйста, подождите.");
                Thread.Sleep(3000);
                Console.Clear();
                Console.Write("Первый игрок ");
                firstPlayerCharacter = Battle.Damage(firstPlayerBody, firstPlayerCharacter, secondPlayerCharacter);
                firstPlayerBody = Battle.ZeroingBodyParam();
                Console.Write("Второй игрок ");
                secondPlayerCharacter = Battle.Damage(secondPlayerBody, secondPlayerCharacter, firstPlayerCharacter);
                secondPlayerBody = Battle.ZeroingBodyParam();
                Console.WriteLine($"Итоги {i} раунда.\n\t\t\tПараметры Первого игрока:\n{firstPlayerCharacter}\n\t\t\tПараметры Второго игрока:\n{secondPlayerCharacter}");
                Console.WriteLine("Press any key to continue...");
                Console.ReadKey(true);
            }
            Console.WriteLine("Кажется у нас победитель!!!");
            Thread.Sleep(5000);
            if (Character.ReturnHeal(firstPlayerCharacter) == 0 && Character.ReturnHeal(secondPlayerCharacter) == 0)
                Console.WriteLine("Ничья! Вы зарубили друг друга. Победа за игрой");
            else if (Character.ReturnHeal(firstPlayerCharacter) == 0)
                Console.WriteLine("Второй игрок зарубил первого... Второй игрок победил!");
            else if (Character.ReturnHeal(secondPlayerCharacter) == 0)
                Console.WriteLine("Первый игрок зарубил второго... Первый игрок победил!");
            Console.WriteLine("Второй игрок зарубил первого... Второй игрок победил!");
            Console.WriteLine("Press any key to continue...");
            Console.ReadKey(true);
        }

    }
}
