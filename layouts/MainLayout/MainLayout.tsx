import Header from 'components/Header/Header'
import Head from 'next/head'
import { PropsWithChildren } from 'react'

type MainLayoutProps = {}

const MainLayout: React.FC<PropsWithChildren<MainLayoutProps>> = ({
  children,
}) => {
  return (
    <div>
      <Head>
        <title>Thuong Da Dev</title>
      </Head>

      <div className="w-full min-h-screen bg-swatch_1">
        <Header />
        <main className="w-full h-full px-20">{children}</main>
      </div>
    </div>
  )
}

export default MainLayout
