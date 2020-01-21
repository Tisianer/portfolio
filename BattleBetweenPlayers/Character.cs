using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace reabilitaciya
{
    public class Character : CharacterStats
    {
        public Character(int characterId, string characterName, int characterStrength, int characterHeal) : base(characterId, characterName, characterStrength, characterHeal) { }
        
        public static Character InputCheckAndChoiceCharacter(Character PlayerCharacter, Character Wizard, Character Warrior, Character Shaman, Character Paladin)
        {
            bool PlayerInputCheck = true;// Переменная помогает поддерживать жизнь цикла далее, пока пользователь не введет запрошенную информацию правильно.
            string firstPlayerId;
            while (PlayerInputCheck)
            {
                try
                {
                    Convert.ToInt32(firstPlayerId = Console.ReadLine());
                }
                catch
                {
                    Console.WriteLine("Пожалуйста, хватит ломать игру и введите Id персонажа");
                    continue;
                }
                switch (Convert.ToInt32(firstPlayerId))
                {
                    case 4:
                        PlayerCharacter = Wizard; Console.WriteLine("Поздравляю вы играете за персонажа - Wizard!");
                        PlayerInputCheck = false;
                        break;
                    case 1:
                        PlayerCharacter = Warrior; Console.WriteLine("Поздравляю вы играете за персонажа - Warrior!");
                        PlayerInputCheck = false;
                        break;
                    case 2:
                        PlayerCharacter = Shaman; Console.WriteLine("Поздравляю вы играете за персонажа - Shaman!");
                        PlayerInputCheck = false;
                        break;
                    case 3:
                        PlayerCharacter = Paladin; Console.WriteLine("Поздравляю вы играете за персонажа - Paladin!");
                        PlayerInputCheck = false;
                        break;
                    default:
                        Console.WriteLine("Персонажа с таким Id не существует.\nПожалуйста введите Id существующего персонажа, которые были отображенны ранее.");
                        if (PlayerInputCheck == false)
                            PlayerInputCheck = true;
                        break;
                }
            } 
            return PlayerCharacter;
        }
        
        public static int ReturnHeal (Character PlayerHeal)
        {
            return PlayerHeal.characterHeal;
        }

        public static Character TakeDamadge(Character PlayerHeal, Character PlayerStrength)
        {
            var Heal = PlayerHeal.characterHeal - PlayerStrength.characterStrength;
            var PlayerCharacter = new Character(PlayerHeal.characterId, PlayerHeal.characterName, PlayerHeal.characterStrength, Heal);
            return PlayerCharacter;
        }
    }
}
