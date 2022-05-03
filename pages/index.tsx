import HomeContainer from 'containers/HomeConatiner/HomeContainer'
import MainLayout from 'layouts/MainLayout/MainLayout'
import { NextPage } from 'next'
const Home: NextPage = () => {
  return (
    <MainLayout>
      <HomeContainer />
    </MainLayout>
  )
}
export default Home
