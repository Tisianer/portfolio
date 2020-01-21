using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace reabilitaciya
{
    public abstract class CharacterStats
    {
        protected int characterId { get; }
        protected string characterName { get; }
        protected int characterStrength { get; set; }
        protected int characterHeal { get; set; }
        public CharacterStats(int characterId, string characterName, int characterStrength, int characterHeal)
        {
            if (characterId < 0)
                throw new ArgumentNullException(nameof(characterId));
            if (string.IsNullOrWhiteSpace(characterName))
                throw new ArgumentNullException(nameof(characterName));
            if (characterStrength < 0)
                throw new ArgumentNullException(nameof(characterStrength));
            this.characterId = characterId;
            this.characterName = characterName;
            this.characterStrength = characterStrength;
            this.characterHeal = characterHeal;
        }

        public override string ToString()
        {
            return $"{characterName} - id: {characterId}; Сила(сила = наносимому урону): {characterStrength}; Здоровье: {characterHeal};";
        }
    }
}
