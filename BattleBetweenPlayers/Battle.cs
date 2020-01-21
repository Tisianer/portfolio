using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace reabilitaciya
{
    public class Battle
    {
        private int Head { get; set; }
        private int Torso { get; set; }
        private int Legs { get; set; }
        private static int Attack = 1;//поле отвечает, куда был нанесен удар персонажу.
        private static int Defense = 2;//поле отвечает, что персонаж защищал.

        public Battle (int Head, int Torso, int Legs)
        {
            this.Head = Head;
            this.Torso = Torso;
            this.Legs = Legs;
        }

        public static int InputCheckAttackOrDefense()
        {
            string AttackOrDefense;
            while (true)
            {
                try
                {
                    Convert.ToInt32(AttackOrDefense = Console.ReadLine());
                }
                catch
                {
                    Console.WriteLine("Снова пытаетесь сломать игру... Перестаньте и введите, что вас просят.");
                    continue;
                }
                if (Convert.ToInt32(AttackOrDefense) == Attack || Convert.ToInt32(AttackOrDefense) == Defense)
                    return Convert.ToInt32(AttackOrDefense);
                else
                    Console.WriteLine($"Для атаки введите - 1. Для защиты - 2. Вы ввели - {AttackOrDefense}.\nПожалуйста, введите, что вас просят.");
            }
        }
        
        public static Battle PlayerAttack(Battle PlayerBody)
        {
            string InputCheckAttack;
            Console.WriteLine("Введите, какую часть тела вы хотите атаковать.\nДля выбора введите ключевое слово соответственно.\nHead - для атаки в голову; Torso - для атаки в торс; Legs - для атаки в ноги;");
            while (true)
            {
                switch (InputCheckAttack = Console.ReadLine())
                {
                    case "Head":
                        if (PlayerBody.Head != Defense)
                            PlayerBody.Head = Attack;
                        return PlayerBody;
                    case "Torso":
                        if (PlayerBody.Torso != Defense)
                            PlayerBody.Torso = Attack;
                        return PlayerBody;
                    case "Legs":
                        if (PlayerBody.Legs != Defense)
                            PlayerBody.Legs = Attack;
                        return PlayerBody;
                    default:
                        Console.WriteLine("Игра работает по ключевым словам, если вы видите это сообщение...\nПерестаньте ломать игру и введите ключевое слово.");
                        break;
                }
            }
        }
        
        public static Battle PlayerDefense(Battle PlayerBody)
        {
            string InputCheckDefense;
            Console.WriteLine("Введите, какую часть тела вы хотите защищать.\nДля выбора введите ключевое слово соответственно.\nHead - для защиты в голову; Torso - для защиты в торс; Legs - для защиты в ноги;");
            while (true)
            {
                switch (InputCheckDefense = Console.ReadLine())
                {
                    case "Head":
                        PlayerBody.Head = Defense;
                        return PlayerBody;
                    case "Torso":
                        PlayerBody.Torso = Defense;
                        return PlayerBody;
                    case "Legs":
                        PlayerBody.Legs = Defense;
                        return PlayerBody;
                    default:
                        Console.WriteLine("Игра работает по ключевым словам, если вы видите это сообщение...\nПерестаньте ломать игру и введите ключевое слово.");
                        break;
                }
            }
        }
        public static Character Damage(Battle PlayerBody, Character PlayerCharacter, Character DamagingPlayerCharacter)
        {
            if (PlayerBody.Head == Attack || PlayerBody.Torso == Attack || PlayerBody.Legs == Attack)
            {
                PlayerCharacter = Character.TakeDamadge(PlayerCharacter, DamagingPlayerCharacter);
                if (PlayerBody.Head == Attack)
                    Console.WriteLine("был атакован в голову и потерял некоторое количество жизней.");
                else if (PlayerBody.Torso == Attack)
                    Console.WriteLine("был атакован в туловище и потерял некоторое количество жизней.");
                else if (PlayerBody.Legs == Attack)
                    Console.WriteLine("был атакован в ноги и потерял некоторое количество жизней.");
                return PlayerCharacter;
            }
            else
            {
                Console.WriteLine("не получает урона!");
                return PlayerCharacter;
            }
        }
        public static Battle ZeroingBodyParam()
        {
            var PlayerBody = new Battle(0, 0, 0);
            return PlayerBody;
        }
    }
}
