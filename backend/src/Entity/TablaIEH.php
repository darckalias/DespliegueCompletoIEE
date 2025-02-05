<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "secretosIEH")]
class TablaIEH
{
 #[ORM\Id]
 #[ORM\GeneratedValue]
 #[ORM\Column(type: "integer")]
 private int $id;
 #[ORM\Column(type: "string", length: 255)]
 private string $fraseIEH;
 public function getId(): int
 {
 return $this->id;
 }
 public function getfraseIEH(): string
 {
 return $this->fraseIEh;
 }
 public function setfraseIEH(string $fraseIEH): self
 {
 $this->fraseIEH = $fraseIEH;
 return $this;
 }
}