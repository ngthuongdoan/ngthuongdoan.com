import Image from 'next/image'
import Signature from 'assets/img/signature.png'
import Icons from 'components/Icons'
import Link from 'next/link'
type HeaderProps = {}

const Header: React.FC<HeaderProps> = () => {
  return (
    <header className="w-full h-20 flex items-center justify-between border px-20">
      <nav>
        <ul className="inline-flex gap-6 text-sm font-bold uppercase font-source-sans">
          <li>
            <Link href="/work">Work</Link>
          </li>
          <li>
            <Link href="/about">About</Link>
          </li>
          <li>
            <Link href="/contact">Contact</Link>
          </li>
        </ul>
      </nav>
      <Image
        src={Signature}
        width={200}
        objectFit="contain"
        alt="Thuong Da Dev Signature"
      />
      {/* Social Media */}
      <ul className="inline-flex gap-6">
        <li>
          <a href="">
            <Icons.Facebook />
          </a>
        </li>
        <li>
          <a href="">
            <Icons.Github />
          </a>
        </li>
        <li>
          <a href="">
            <Icons.Linkedin />
          </a>
        </li>
      </ul>
    </header>
  )
}

export default Header
