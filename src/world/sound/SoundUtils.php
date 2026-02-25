<?php

/* 
 * $$$$$$$\                                           $$$$$$\                     
 * $$  __$$\                                         $$  __$$\                    
 * $$ |  $$ | $$$$$$$\ $$\   $$\  $$$$$$$\  $$$$$$\  $$ /  \__|$$$$$$\  $$\   $$\ 
 * $$$$$$$  |$$  _____|$$ |  $$ |$$  _____|$$  __$$\ $$$$\    $$  __$$\ $$ |  $$ |
 * $$  ____/ \$$$$$\  $$ |  $$ |$$ /      $$ /  $$ |$$  _|   $$$$$$$$ |$$ |  $$ |
 * $$ |       \____$$\ $$ |  $$ |$$ |      $$ |  $$ |$$ |     $$   ____|$$ |  $$ |
 * $$ |      $$$$$$$  |\$$$$$$ |\$$$$$$\ \$$$$$  |$$ |     \$$$$$$\ \$$$$$  |
 * \__|      \_______/  \____$$ | \_______| \______/ \__|      \_______| \______/ 
 *                     $$\   $$ |                                                 
 *                     \$$$$$  |                                                 
 *                      \______/                                                  
 * Ce programme est strictement privé.
 * Toute reproduction, diffusion ou fuite est interdite.
 * Merci de respecter le travail de l’auteur.
 * @author Psycofeu
 * @donation https://paypal.me/hydrabedrock
 * @view https://discord.gg/hydramc
*/

namespace pocketmine\world\sound;

use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\player\Player;

final class SoundUtils {

	public static function send(Player $player, string $sound, float $volume = 1.0, float $pitch = 0.6): void {
		$pos = $player->getPosition();
		$player->getNetworkSession()->sendDataPacket(PlaySoundPacket::create($sound, $pos->getX(), $pos->getY(), $pos->getZ(), $volume, $pitch));
	}
}